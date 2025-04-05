<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Perfile;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\PerfileRequest;
use Illuminate\Http\RedirectResponse;
use MongoDB\Laravel\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;


class PerfileController extends Controller
{
    // Controlador PerfileController.php
    // En PerfileController.php (método index)
    public function index(Request $request): View
    {
        $perPage = 10; // Número de elementos por página
        $page = $request->input('page', 1);

        $cursor = Perfile::raw(function ($collection) {
            return $collection->aggregate([
                [
                    '$lookup' => [
                        'from' => 'roles',
                        'localField' => 'role_id',
                        'foreignField' => '_id',
                        'as' => 'role'
                    ]
                ],
                ['$unwind' => '$role'],
                ['$match' => ['role.rol' => 'trabajador']],
                ['$project' => [
                    'experiencia' => 1,
                    'disponibilidad' => 1,
                    'tarifa_por_hora' => 1,
                    'calificacion' => 1,
                    'numero_resenas' => 1,
                    'role.nombre' => 1,
                    'role.apellido' => 1,
                ]]
            ]);
        });

        // Convertimos el cursor a array
        $results = iterator_to_array($cursor);
        $total = count($results);

        // Obtenemos el "slice" de la página actual
        $sliced = array_slice($results, ($page - 1) * $perPage, $perPage);

        // Creamos un paginador
        $perfiles = new LengthAwarePaginator($sliced, $total, $perPage, $page, [
            'path' => $request->url(),
            'query' => $request->query()
        ]);

        return view('perfile.index', ['perfiles' => $perfiles]);
    }
    public function create(): View
    {
        $trabajadores = Role::where('rol', 'trabajador')
                          ->get(['_id', 'nombre', 'apellido']);
        
        return view('perfile.create', compact('trabajadores'));
    }

    public function store(PerfileRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        
        Perfile::create([
            'role_id' => $validated['role_id'],
            'experiencia' => $validated['experiencia'],
            'disponibilidad' => $validated['disponibilidad'],
            'tarifa_por_hora' => $validated['tarifa_por_hora'],
            'calificacion' => 0,
            'numero_resenas' => 0
        ]);

        return redirect()->route('perfiles.index')
                         ->with('success', 'Perfil creado exitosamente');
    }

    public function show(Perfile $perfile): View
    {
        $perfile->load('role');
        return view('perfiles.show', compact('perfile'));
    }

    public function edit(Perfile $perfile): View
    {
        $trabajadores = Role::where('rol', 'trabajador')
                          ->get(['_id', 'nombre', 'apellido']);
        
        return view('perfiles.edit', compact('perfile', 'trabajadores'));
    }

    public function update(PerfileRequest $request, Perfile $perfile): RedirectResponse
    {
        $perfile->update($request->validated());
        return redirect()->route('perfiles.index')
                         ->with('success', 'Perfil actualizado correctamente');
    }

    public function destroy(Perfile $perfile): RedirectResponse
    {
        $perfile->delete();
        return redirect()->route('perfiles.index')
                         ->with('success', 'Perfil eliminado permanentemente');
    }
    
}
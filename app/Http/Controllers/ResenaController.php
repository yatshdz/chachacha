<?php

namespace App\Http\Controllers;

use App\Models\Resena;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ResenaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ResenaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $resenas = Resena::paginate();

        return view('resena.index', compact('resenas'))
            ->with('i', ($request->input('page', 1) - 1) * $resenas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $resena = new Resena();

        return view('resena.create', compact('resena'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResenaRequest $request): RedirectResponse
    {
        try {
            Resena::create($request->validated());
            return Redirect::route('resenas.index')->with('success', 'Resena created successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Error al crear la reseña: ' . $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $resena = Resena::find($id);

        return view('resena.show', compact('resena'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $resena = Resena::find($id);

        return view('resena.edit', compact('resena'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ResenaRequest $request, Resena $resena): RedirectResponse
    {
        $resena->update($request->validated());

        return Redirect::route('resenas.index')
            ->with('success', 'Resena updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Resena::find($id)->delete();

        return Redirect::route('resenas.index')
            ->with('success', 'Resena deleted successfully');
    }
}

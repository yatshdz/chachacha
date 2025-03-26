<?php

namespace App\Http\Controllers;

use App\Models\Perfile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PerfileRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PerfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $perfiles = Perfile::paginate();

        return view('perfile.index', compact('perfiles'))
            ->with('i', ($request->input('page', 1) - 1) * $perfiles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $perfile = new Perfile();

        return view('perfile.create', compact('perfile'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PerfileRequest $request): RedirectResponse
    {
        Perfile::create($request->validated());

        return Redirect::route('perfiles.index')
            ->with('success', 'Perfile created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $perfile = Perfile::find($id);

        return view('perfile.show', compact('perfile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $perfile = Perfile::find($id);

        return view('perfile.edit', compact('perfile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PerfileRequest $request, Perfile $perfile): RedirectResponse
    {
        $perfile->update($request->validated());

        return Redirect::route('perfiles.index')
            ->with('success', 'Perfile updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Perfile::find($id)->delete();

        return Redirect::route('perfiles.index')
            ->with('success', 'Perfile deleted successfully');
    }
}

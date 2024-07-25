<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();
        return view('admin.animals.index', compact('animals'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $animal = Animal::findOrFail($id);
        return view('admin.animals.show', compact('animal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // salvo tutti i dati in un nuovo array associativo chiamato data
        $data=$request->all();

        // metodo a mano
        // salvo tutti i dati in un nuovo array associativo chiamato data
        // $newAnimal = new Animal();
        // $newAnimal->name = $data['name'];
        // $newAnimal->species = $data['species'];
        // $newAnimal->weight = $data['weight'];
        // $newAnimal->alimentation = $data['alimentation'];
        // $newAnimal->extintion = $data['extintion'];
        // $newAnimal->colour = $data['colour'];
        // $newAnimal->habitat = $data['habitat'];
        // $newAnimal->life_duration = $data['life_duration'];
        // $newAnimal-> save();
        // return redirect()->route('admin.animals.show', $newAnimal);

        // con le fillable messe sempre nel model
        $newAnimal = new Animal ($data);
        $newAnimal->save();
        return redirect()->route('admin.animals.show', $newAnimal);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

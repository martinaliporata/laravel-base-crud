<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
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
    public function store(StoreAnimalRequest $request)
    {
        $data = $request->validated();
        // salvo tutti i dati in un nuovo array associativo chiamato data
        // $data=$request->all();

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
        $animal = Animal::findOrFail($id);
        return view('admin.animals.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnimalRequest $request, string $id)
    {
        // prendo i dati della richiesta mandati con la post
        $data = $request->validate();

        // metodo a mano
        // Recuperare l'animale tramite l'ID
        $animal = Animal::findOrFail($id);
        // Aggiornare i dati dell'animale
        $animal->name = $data['name'];
        $animal->species = $data['species'];
        $animal->weight = $data['weight'];
        $animal->alimentation = $data['alimentation'];
        $animal->extintion = $data['extintion'];
        $animal->colour = $data['colour'];
        $animal->habitat = $data['habitat'];
        $animal->life_duration = $data['life_duration'];
        $animal-> update();

        return redirect()->route('admin.animals.show', $animal->id)->with('message', $animal->name."has been edited successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();
        return redirect()->route('admin.animals.index');
    }
}

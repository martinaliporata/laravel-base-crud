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
    public function show(Animal $animal)
    {
        // $animals = Animal::findOrFail($id);
        return view('admin.animals.show');
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
        $data=$request->all();
        $newAnimal->name=$data['name'];
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
use App\Models\Works;
class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $machines= Machine::with('work_machines')->get();
       return view('Machines.index', compact('machines'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $machines= Machine::create([
             'type'->$request->type,
             'model'->$request->model,
             'name'->$request->name,

        ]);

        return redirect()->route('machines.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $machines= Machine::findOrFail($id);
        $machines->type= $request->type;
        $machines->model= $request->model;
        $machines->name= $request->name;
        $machines->start_date= $request->start_date;
        $machines->start_date= $request->start_date;
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $machines= Machine::findOrFail($id);
        $machines->delete();

        return redirect()->route('machines.index')->with('success', 'Maquina eliminada correctamente');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
use App\Models\Work;
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
        $works= Work::all();
        return view('Machines.create', compact('works'));
    }

    public function store(Request $request)
    {
        $machines= Machine::create([
             'type'=>$request->type,
             'model'=>$request->model,
             'name'=>$request->name,

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
        $machines= Machine::FindorFail($id);
        return view('Machines.edit', compact('machines'));
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
        $machines->end_date= $request->end_date;
        $machines->final_reason= $request->final_reason;
        $machines->save();

        return view('Machines.index', compact('machines'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $machines= Machine::findOrFail($id);
        $machines->delete();

        return redirect()->route('machines.index');
    }
}

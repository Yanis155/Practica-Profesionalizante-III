<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Machine;
class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $machines= Machine::with('obra')->get();
       return view('machines.index', compact('machines'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    public function store(Request $request)
    {
        $machines= Machine::create([
            'start_date'->$request->start_date,
            'end_date'->$request->end_date,
            'final_reason'->$request->final_reason,
            'mileage_traveled'->$request->mileage_traveled,

        ]);

        return redirect()->route('create');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $machines= Machine::findOrFail($id);
        $machines->delete();

        return redirect('machines.index')->with('success', 'Maquina eliminada correctamente');
    }
}

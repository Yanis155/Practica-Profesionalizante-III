<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;
use App\Models\Machine;
class MaintenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maintenances= Maintenance::all();
        return view('Maintenance.index', compact('maintenances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $machines= Machine::all();
        return view('Maintenance.create', compact('maintenances','machines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $maintenances= Maintenance::create([
             
            'type'->$request->type,
            'start_date'->$request->start_date,
            'end_date'->$request->end_date,
            'current_mileage'->$request->current_mileage,
            'machine_id'->$request->machine_id,
        ]);

        return redirect()->route('maintenance.index');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $maintenances= Maintenance::FindorFail($id);
        $machines= Machine::pluck('id', 'type')->toArray();
            return view('Maintenance.edit', compact('maintenances','machines'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $maintenances= Maintenance::findOrFail($id);
        $maintenances->type= $request->type;
        $maintenances->start_date= $request->start_date;
        $maintenances->end_date= $request->end_date;
        $maintenances->current_mileage= $request->current_mileage;
        $maintenances->save();

        return view('Maintenance.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $maintenances= Maintenance::findOrFail($id);
        $maintenances->delete();

        return redirect()->route('maintenances.index');
    }
}

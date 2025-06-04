<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Work;
use App\Models\Machine;
use App\Models\WorkMachines;
class WorkMachinesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $worksMachines= WorkMachines::with(['machine','work'])->get();
        // return view('workMachines.list', compact('workMachines'));
        
    }

    public function create()
    {
        $works= Work::with('provinces')->get(); 
        $machines= Machine::all(); 
        return view('workMachines.create',compact('machines','works'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'machine_id' => 'required|exists:machines,id',
            'work_id' => 'required|exists:works,id',
            'start_date' => 'required|date|before_or_equal:today',
        ]);

        $worksMachines= WorkMachines::create([
            'machine_id'=>$request->machine_id,
            'work_id'=>$request->work_id,
            'start_date'=>$request->start_date,
        ]);
        return redirect()->route('workMachines.index')->with('sucess', 'Asignacion realizada correctamente');
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
        $workMachines= WorkMachines::FindorFail($id);
        return view('workMachines.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'end_date' => 'required|date|before_or_equal:today',
            'final_reason' => 'required|string|max:255',
            'mileage_traveled' => 'required|integer|min:0',
        ]);

        $workMachines= WorkMachines::findOrFail($id);
        $workMachines->end_date= $request->end_date;
        $workMachines->final_reason= $request->final_reason;
        $workMachines->mileage_traveled= $request->mileage_traveled;
        $workMachines->save();

        return view('workMachines.index')->with('sucess', 'Asignacion finalizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $workMachines= WorkMachines::findOrFail($id);
        $workMachines->delete();

        return redirect()->route('workMachines.index');
    }
    public function active(Request $request){
        
        //verifica si la maquina ya esta asignada a una obra activa: 
        $activeAssignment = WorkMachines::where('machine_id', $request->machine_id)->whereNull('end_date')->first();
        
        if($activeAssignment){
            return redirect()->back()->with('error', 'La maquina tiene una asignacion activa');
        }

        //verifica que la ultima asignacion tenga km registrados
        $kilometersRecorded= WorkMachines::where('machine_id', $request->machine_id)->orderByDesc('start_date')->first();

        if($kilometersRecorded && !$kilometersRecorded->mileage_traveled && $kilometersRecorded->end_date){
            return redirect()->back()->with('error', 'La asignacion anterior no tiene kilometros registrados');
        }
        return view('Machines.active');
    }
}

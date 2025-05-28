<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Province;
use App\Models\Machine;
class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works= Work::with('work_machines')->get();;
        return view('Works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $provinces= Province::all();  //cargo todas las provincias
        return view('Works.create', compact('provinces'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $works= Work::create([
             'name'=>$request->name,
             'start_date'=>$request->start_date,
             'end_date'=>$request->end_date,
             'province_id'=>$request->province_id,
        ]);
        return redirect()->route('works.index');
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
        $works= Work::FindorFail($id);
        return view('Works.edit', compact('works'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $works= Work::FindOrFail($id);
        $works->name= $request->name;
        $works->start_date= $request->start_date;
        $works->end_date= $request->end_date;
        $works->province_id= $request->province_id;
        $works->save();

        return view('Works.index', compact('works'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $works= Work::findOrFail($id);
        $works->delete();

        return redirect()->route('works.index')->with('success', 'Obra eliminada correctamente');
    }
}

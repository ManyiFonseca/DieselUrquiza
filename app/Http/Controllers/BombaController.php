<?php

namespace App\Http\Controllers;

use App\Models\Bomba;
use Illuminate\Http\Request;

class BombaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bombas = bomba::all();
        return view('Bombas.index', compact('bombas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Bombas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        bomba::create($request->all());
        return redirect()->route('Bombas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(bomba $bomba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bomba $bomba)
    {
         return view('Bombas.edit', compact('bomba'));   
    }
      

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, bomba $bomba)
    {
        $bomba->update($request->all());
        return redirect()->route('Bombas.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(bomba $bomba)
    {
        //
    }
}

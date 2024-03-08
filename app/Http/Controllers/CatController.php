<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('cat.index');
        // return view('cat.index');
        
        $data= DB::select('SELECT * FROM cats');
        // dd($data[0]['id']);
        return view('cat.index', ['data' => $data]);
        // return view($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    public function excel(){
        dd('cat excel');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Glumac;
use Illuminate\Http\Request;
use App\Http\Resources\ResourceGlumac;

class GlumacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $glumci = Glumac::all();
        return ResourceGlumac::collection($glumci);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Glumac  $glumac
     * @return \Illuminate\Http\Response
     */
    public function show(Glumac $glumac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Glumac  $glumac
     * @return \Illuminate\Http\Response
     */
    public function edit(Glumac $glumac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Glumac  $glumac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Glumac $glumac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Glumac  $glumac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Glumac $glumac)
    {
        $glumac->delete();
        return response()->json(['Glumac je obrisan', new ResourceGlumac($glumac)]);
    }
}

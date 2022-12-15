<?php

namespace App\Http\Controllers;

use App\Models\Reditelj;
use Illuminate\Http\Request;
use App\Http\Resources\ResourceReditelj;
use Illuminate\Support\Facades\Validator;
class RediteljController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rediteljs = Reditelj::all();
        return ResourceReditelj::collection($rediteljs);
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
     * @param  \App\Models\Reditelj  $reditelj
     * @return \Illuminate\Http\Response
     */
    public function show(Reditelj $reditelj)
    {
        return new ResourceReditelj($reditelj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reditelj  $reditelj
     * @return \Illuminate\Http\Response
     */
    public function edit(Reditelj $reditelj)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reditelj  $reditelj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reditelj $reditelj)
    {
        $validator = Validator::make($request->all(), [
            'imeReditelja' => 'required|string',
            'prezimeReditelja' => 'required|string',
            'godine' => 'required|integer'
        ]);

        if($validator->fails()){
            return response()->json(['Greska prilikom azuriranja reditelja', $validator->errors()]);
        }

        $reditelj->imeReditelja = $request->imeReditelja;
        $reditelj->prezimeReditelja = $request->prezimeReditelja;
        $reditelj->godine = $request->godine;

        $reditelj->save();

        return response()->json(['Reditelj je azuriran', new ResourceReditelj($reditelj)]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reditelj  $reditelj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reditelj $reditelj)
    {
        $reditelj->delete();
        return response()->json(['Reditelj je obrisan', new ResourceReditelj($reditelj)]);
    }
}

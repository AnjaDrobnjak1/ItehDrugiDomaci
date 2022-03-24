<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResursDrzava;
use App\Models\Drzava;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DrzavaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drz = Drzava::all();
        return ResursDrzava::collection($drz);
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
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'glavni_grad' => 'required|string',
            'broj_stanovnika' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greška!', $validator->errors()]);
        }

        $drzava = Drzava::create([
            'naziv' => $request->naziv,
            'glavni_grad' => $request->glavni_grad,
            'broj_stanovnika' => $request->broj_stanovnika,
        ]);

        return response()->json(['Nova država uneta u bazu', new ResursDrzava($drzava)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function show(Drzava $drzava)
    {
        return new ResursDrzava($drzava);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function edit(Drzava $drzava)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drzava $drzava)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drzava  $drzava
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drzava $drzava)
    {
        $drzava->delete();
        return response()->json(['Država obrisana iz baze']);
    }
}

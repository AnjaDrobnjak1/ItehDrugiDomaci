<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResursTeniser;
use App\Models\Teniser;
use Illuminate\Http\Request;

class TeniserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ten = Teniser::all();
        return ResursTeniser::collection($ten);
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
     * @param  \App\Models\Teniser  $teniser
     * @return \Illuminate\Http\Response
     */
    public function show(Teniser $teniser)
    {
        return new ResursTeniser($teniser);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teniser  $teniser
     * @return \Illuminate\Http\Response
     */
    public function edit(Teniser $teniser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teniser  $teniser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teniser $teniser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teniser  $teniser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teniser $teniser)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\V1\Pizza;

use App\Http\Controllers\Controller;
use App\Pizza\PizzasTag;
use Illuminate\Http\Request;

class PizzasTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param  \App\Pizza\PizzasTag  $pizzasTag
     * @return \Illuminate\Http\Response
     */
    public function show(PizzasTag $pizzasTag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pizza\PizzasTag  $pizzasTag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PizzasTag $pizzasTag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pizza\PizzasTag  $pizzasTag
     * @return \Illuminate\Http\Response
     */
    public function destroy(PizzasTag $pizzasTag)
    {
        //
    }
}

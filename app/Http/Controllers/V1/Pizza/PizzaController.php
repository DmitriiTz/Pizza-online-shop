<?php

namespace App\Http\Controllers\V1\Pizza;

use App\Http\Controllers\Controller;
use App\Entities\Pizza\Pizza;
use App\Http\Resources\Pizza as PizzaResource;

class PizzaController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return PizzaResource::collection(Pizza::all());
    }
}

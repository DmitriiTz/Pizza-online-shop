<?php

namespace App\Http\Controllers\V1\Pizza;

use App\Http\Controllers\Controller;
use App\Entities\Pizza\Tag;
use App\Http\Resources\Tag as TagResource;

class TagController extends Controller
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return TagResource::collection(Tag::all());
    }
}

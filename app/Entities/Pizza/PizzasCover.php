<?php

namespace App\Pizza;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(
 *  definition="PizzasCover",
 *  @SWG\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="pizza_id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="path",
 *      type="string"
 *  )
 * )
 */
class PizzasCover extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pizza_id',
        'path'
    ];

}

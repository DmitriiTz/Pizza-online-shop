<?php

namespace App\Pizza;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(
 *  definition="Tag",
 *  @SWG\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="title",
 *      type="string"
 *  )
 * )
 */
class Tag extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pizza_id',
        'tag_id',
    ];
}

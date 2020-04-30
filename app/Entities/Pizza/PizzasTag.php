<?php

namespace App\Pizza;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(
 *  definition="PizzasTag",
 *  @SWG\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="pizza_id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="tag_id",
 *      type="integer"
 *  )
 * )
 */
class PizzasTag extends Model
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

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'tag'
    ];

    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pizza(){
        return $this->belongsTo(Pizza::class);
    }

    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tag(){
        return $this->belongsTo(Tag::class);
    }
}

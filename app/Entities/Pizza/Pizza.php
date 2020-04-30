<?php

namespace App\Entities\Pizza;

use Illuminate\Database\Eloquent\Model;

/**
 * @SWG\Definition(
 *  definition="Pizza",
 *  @SWG\Property(
 *      property="id",
 *      type="integer"
 *  ),
 *  @SWG\Property(
 *      property="title",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="description",
 *      type="string"
 *  ),
 *  @SWG\Property(
 *      property="cost",
 *      type="float"
 *  )
 * )
 */
class Pizza extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'cost',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'covers',
        'tags'
    ];

    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function covers(){
        return $this->hasMany(PizzasCover::class);
    }

    /**
     *
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tags(){
        return $this->hasMany(PizzasTag::class);
    }
}

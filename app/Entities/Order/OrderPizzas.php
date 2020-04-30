<?php

namespace App\Entities\Order;

use App\Entities\Pizza\Pizza;
use Illuminate\Database\Eloquent\Model;


class OrderPizzas extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'pizza_id',
        'count',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [
        'pizza'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pizza(){
        return $this->belongsTo(Pizza::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order(){
        return $this->belongsTo(Order::class);
    }
}

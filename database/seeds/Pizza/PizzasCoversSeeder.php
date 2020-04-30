<?php

use App\Pizza\Pizza;
use App\Pizza\PizzasCover;
use Illuminate\Database\Seeder;

class PizzasCoversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [];

        $pizzas = Pizza::all();

        foreach ($pizzas as $pizza){
            $data[] = [
                'pizza_id' => $pizza->id,
                'path' => url("/pizzas_covers/{$pizza->id}.png"),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        PizzasCover::insert($data);
    }
}

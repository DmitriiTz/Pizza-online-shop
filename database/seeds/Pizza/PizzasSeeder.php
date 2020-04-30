<?php

use Illuminate\Database\Seeder;
use App\Entities\Pizza\Pizza;

class PizzasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pizza::class, 8)->create();
    }
}
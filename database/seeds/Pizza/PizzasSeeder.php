<?php

use Illuminate\Database\Seeder;

class PizzasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Pizza\Pizza::class, 8)->create();
    }
}
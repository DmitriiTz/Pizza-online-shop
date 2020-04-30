<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PizzasSeeder::class);
        $this->call(PizzasCoversSeeder::class);
        $this->call(TagsSeeder::class);
        $this->call(PizzasTagsSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderPizzasSeeder::class);
    }
}

<?php

use App\Pizza\PizzasTag;
use Illuminate\Database\Seeder;

class PizzasTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                'pizza_id' => 1,
                'tag_id' => 1,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'pizza_id' => 1,
                'tag_id' => 2,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'pizza_id' => 1,
                'tag_id' => 4,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'pizza_id' => 2,
                'tag_id' => 2,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'pizza_id' => 2,
                'tag_id' => 5,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'pizza_id' => 3,
                'tag_id' => 2,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'pizza_id' => 4,
                'tag_id' => 6,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'pizza_id' => 4,
                'tag_id' => 3,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'pizza_id' => 5,
                'tag_id' => 3,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'pizza_id' => 6,
                'tag_id' => 4,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'pizza_id' => 7,
                'tag_id' => 6,
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
                'pizza_id' => 8,
                'tag_id' => 5,
                'created_at' => now(),
                'updated_at' => now()

            ]
        ];
        PizzasTag::insert($data);
        //factory(PizzasTag::class, 20)->create();
    }
}

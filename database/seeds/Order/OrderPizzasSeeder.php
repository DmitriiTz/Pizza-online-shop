<?php

use App\Order\OrderPizzas;
use Illuminate\Database\Seeder;

class OrderPizzasSeeder extends Seeder
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
                'order_id' => 1,
                'count' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'pizza_id' => 3,
                'order_id' => 1,
                'count' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'pizza_id' => 4,
                'order_id' => 2,
                'count' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'pizza_id' => 5,
                'order_id' => 2,
                'count' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'pizza_id' => 2,
                'order_id' => 3,
                'count' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'pizza_id' => 2,
                'order_id' => 4,
                'count' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'pizza_id' => 5,
                'order_id' => 5,
                'count' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'pizza_id' => 3,
                'order_id' => 6,
                'count' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        OrderPizzas::insert($data);
        //factory(PizzasTag::class, 20)->create();
    }
}

<?php

use App\Pizza\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
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
                'title' => 'Вегетарианская',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Новинка',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'С мясом',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Острая',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Без лука',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Хит',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Tag::insert($data);
    }
}

<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class ProductInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $items = [
            
            ['id' => '1', 'product_code' => $faker->sentence($nbWords = 26, $variableNbWords = true), 'description'=> $faker->paragraph($nbSentences = 3, $variableNbSentences = true), 'user_id' => '1', 'comment_id' => '1'],
            ['id' => '2', 'product_code' => $faker->sentence($nbWords = 26, $variableNbWords = true), 'description'=> $faker->paragraph($nbSentences = 3, $variableNbSentences = true), 'user_id' => '1', 'comment_id' => '1'],
            ['id' => '3', 'product_code' => $faker->sentence($nbWords = 26, $variableNbWords = true), 'description'=> $faker->paragraph($nbSentences = 3, $variableNbSentences = true), 'user_id' => '1', 'comment_id' => '1'],
            ['id' => '4', 'product_code' => $faker->sentence($nbWords = 26, $variableNbWords = true), 'description'=> $faker->paragraph($nbSentences = 3, $variableNbSentences = true), 'user_id' => '1', 'comment_id' => '1'],


        ];

        foreach ($items as $item) {
            \App\ProductInfo::create($item);
        }
    }
}

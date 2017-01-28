<?php

use Illuminate\Database\Seeder;
use App\Sticker;

class StickerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 100; $i++){
            Sticker::create([
                'name'       			=> $faker->unique()->text(10),
                'price'      			=> $faker->randomDigit(5),
                'picture'    			=> $faker->text(10),
                'height'                => $faker->randomDigit(1),
                'width'                 => $faker->randomDigit(1),
                'sticker_category_id'   => 1,
                'created_at' 			=> $faker->dateTimeThisMonth,
                'updated_at' 			=> $faker->dateTimeThisMonth
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\StickerCategory;

class StickerCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StickerCategory::create([
        	'category' => 'Programación'
        ]);
    }
}

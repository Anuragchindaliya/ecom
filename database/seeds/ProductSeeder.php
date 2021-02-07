<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'LG Platinum mobile',
                'price'=>'10499',
                'description'=>'A long-lasting battery of 4000mAh assures to keep the smartphone pumped up for all your tasks.',
                'category'=>'mobile',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_01-1100-V4.jpg'
            ],
            [
                'name'=>'panasonic Tv',
                'price'=>'200',
                'description'=>'A smartphone with 4gb ram and much more faster',
                'category'=>'tv',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_01-1100-V4.jpg'
            ],
            [
                'name'=>'Soni Tv',
                'price'=>'200',
                'description'=>'A smartphone with 4gb ram and much more faster',
                'category'=>'Tv',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md07518618/gallery/LMG905N-Black-D-01.jpg'
            ],
            [
                'name'=>'LG Fridge',
                'price'=>'23000',
                'description'=>'A smartphone with 4gb ram and much more faster',
                'category'=>'Tv',
                'gallery'=>'https://www.lg.com/in/images/mobile-phones/md07518618/gallery/LMG905N-Black-D-01.jpg'
            ]
        ]);
    }
}

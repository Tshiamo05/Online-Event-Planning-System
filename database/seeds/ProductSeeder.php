<?php

use Illuminate\Database\Seeder;

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
            'name'=>'Lace 2020',
            "price"=>"100",
            "category"=>"attire",
            "description"=>"a collection 2020 evening gown",
            "vendor"=>"Kelly Desigers",
            "gallery"=>"img_evenning-gown.jpg",
        ],
        [
            'name'=>'Laxury deocor',
            "price"=>"1200",
            "category"=>"Decoration",
            "description"=>"class A decoration in a hall",
            "vendor"=>"Nell Decor",
            "gallery"=>"img_decor.jpg",
        ],
        [
            'name'=>'Dom jewelery set',
            "price"=>"2000",
            "category"=>"Jewellery",
            "description"=>"Diamond cut earing with a macthing necklace",
            "vendor"=>"Don k Jewellers",
            "gallery"=>"img_jewelery.jpg",
        ],
        [
            'name'=>'Bride make_up',
            "price"=>"250",
            "category"=>"Make-up and hair",
            "description"=>"beautiful bride make-up and hairstyle",
            "vendor"=>"Army Stylist",
            "gallery"=>"img_make-up.jpg",
        ]);
    }
}

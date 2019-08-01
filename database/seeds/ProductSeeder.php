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
        DB::table('products')->insert([
        	['cat_id'=>'5','name'=>'Latitute 7450','img'=>'latitute7450.jpg'],
        	['cat_id'=>'6','name'=>'Zenbook X123','img'=>'zenbook.jpg'],
        	['cat_id'=>'7','name'=>'Adidas UntralBoots','img'=>'ultralboots.jpg'],
        	['cat_id'=>'8','name'=>'Nike Air Max','img'=>'airmax.jpg'],
        	['cat_id'=>'9','name'=>'Iphone X','img'=>'iphonex.jpg'],
        	['cat_id'=>'10','name'=>'SS Galaxy S10','img'=>'s10.jpg'],
        	['cat_id'=>'11','name'=>'Huawei P30','img'=>'p30.jpg'],
        	['cat_id'=>'12','name'=>'T-Shirt OFFWHITE','img'=>'tshirtoffwhite.jpg'],
        	['cat_id'=>'13','name'=>'T-Shirt HN','img'=>'tshirthn.jpg'],
        	['cat_id'=>'13','name'=>'T-Shirt BMG','img'=>'tshirtoffbmg.jpg'],
            ['cat_id'=>'5','name'=>'Dell XPS','img'=>'xps13.jpg'],
            ['cat_id'=>'6','name'=>'Zenbook X123','img'=>'zenbook.jpg'],
            ['cat_id'=>'7','name'=>'Adidas UntralBoots','img'=>'ultralboots.jpg'],
            ['cat_id'=>'8','name'=>'Nike Air Max','img'=>'airmax.jpg'],
            ['cat_id'=>'9','name'=>'Iphone X','img'=>'iphonex.jpg'],
            ['cat_id'=>'10','name'=>'SS Galaxy S10','img'=>'s10.jpg'],
            ['cat_id'=>'11','name'=>'Huawei P30','img'=>'p30.jpg'],
            ['cat_id'=>'12','name'=>'T-Shirt OFFWHITE','img'=>'tshirtoffwhite.jpg'],
            ['cat_id'=>'13','name'=>'T-Shirt HN','img'=>'tshirthn.jpg'],
            ['cat_id'=>'13','name'=>'T-Shirt BMG','img'=>'tshirtoffbmg.jpg'],
        ]);
    }
}

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
        	['subcat_id'=>'1','name'=>'Latitute 7450','img'=>'latitute7450.jpg'],
        	['subcat_id'=>'2','name'=>'Zenbook X123','img'=>'zenbook.jpg'],
        	['subcat_id'=>'3','name'=>'Adidas UntralBoots','img'=>'ultralboots.jpg'],
        	['subcat_id'=>'4','name'=>'Nike Air Max','img'=>'airmax.jpg'],
        	['subcat_id'=>'5','name'=>'Iphone X','img'=>'iphonex.jpg'],
        	['subcat_id'=>'6','name'=>'SS Galaxy S10','img'=>'s10.jpg'],
        	['subcat_id'=>'7','name'=>'Huawei P30','img'=>'p30.jpg'],
        	['subcat_id'=>'8','name'=>'T-Shirt OFFWHITE','img'=>'tshirtoffwhite.jpg'],
        	['subcat_id'=>'9','name'=>'T-Shirt HN','img'=>'tshirthn.jpg'],
        	['subcat_id'=>'9','name'=>'T-Shirt BMG','img'=>'tshirtoffbmg.jpg']
        ]);
    }
}

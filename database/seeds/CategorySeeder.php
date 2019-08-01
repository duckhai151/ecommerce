<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['name'=>'Laptop','parent_id'=>'0'],
        	['name'=>'Shoes','parent_id'=>'0'],
        	['name'=>'Phone','parent_id'=>'0'],
        	['name'=>'T-Shirt','parent_id'=>'0'],
            ['name'=>'Dell','parent_id'=>'1'],
            ['name'=>'Asus','parent_id'=>'1'],
            ['name'=>'Adidas','parent_id'=>'2'],
            ['name'=>'Nike','parent_id'=>'2'],
            ['name'=>'Apple','parent_id'=>'3'],
            ['name'=>'SamSung','parent_id'=>'3'],
            ['name'=>'Huawei','parent_id'=>'3'],
            ['name'=>'Off-White','parent_id'=>'4'],
            ['name'=>'HNBMG','parent_id'=>'4'],
            ['name'=>'Dell 14 inch','parent_id'=>'5'],
            ['name'=>'Dell 15 inch','parent_id'=>'5']
        ]);
    }
}

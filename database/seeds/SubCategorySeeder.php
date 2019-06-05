<?php

use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert([
        	['cate_id'=>'1','name'=>'Dell'],
        	['cate_id'=>'1','name'=>'Asus'],
        	['cate_id'=>'2','name'=>'Adidas'],
        	['cate_id'=>'2','name'=>'Nike'],
        	['cate_id'=>'3','name'=>'Apple'],
        	['cate_id'=>'3','name'=>'Samsung'],
        	['cate_id'=>'3','name'=>'Huawei'],
        	['cate_id'=>'4','name'=>'Off-White'],
        	['cate_id'=>'4','name'=>'HNBMG']
        ]);
    }
}

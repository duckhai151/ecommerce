<?php

use Illuminate\Database\Seeder;

class ProductSkuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_sku')->insert([
        	['product_id'=>'1','price'=>'350','size'=>'14 inch','stock'=>'8'],
        	['product_id'=>'1','price'=>'400','size'=>'15 inch','stock'=>'9'],
        	['product_id'=>'2','price'=>'500','size'=>'12.5 inch','stock'=>'5'],
        	['product_id'=>'2','price'=>'530','size'=>'13 inch','stock'=>'6'],
        	['product_id'=>'3','price'=>'150','size'=>'white','stock'=>'7'],
        	['product_id'=>'3','price'=>'200','size'=>'black','stock'=>'7'],
        	['product_id'=>'4','price'=>'100','size'=>'white','stock'=>'8'],
        	['product_id'=>'4','price'=>'120','size'=>'black','stock'=>'9'],
        	['product_id'=>'5','price'=>'900','size'=>'256gb','stock'=>'10'],
        	['product_id'=>'5','price'=>'1000','size'=>'512gb','stock'=>'12'],
        	['product_id'=>'6','price'=>'800','size'=>'256gb','stock'=>'13'],
        	['product_id'=>'6','price'=>'850','size'=>'512gb','stock'=>'18'],
        	['product_id'=>'7','price'=>'1000','size'=>'512gb','stock'=>'20'],
        	['product_id'=>'7','price'=>'1100','size'=>'1tb','stock'=>'5'],
        	['product_id'=>'8','price'=>'30','size'=>'white','stock'=>'9'],
        	['product_id'=>'8','price'=>'35','size'=>'black','stock'=>'20'],
        	['product_id'=>'9','price'=>'25','size'=>'white','stock'=>'25'],
        	['product_id'=>'9','price'=>'20','size'=>'black','stock'=>'30'],
        	['product_id'=>'10','price'=>'15','size'=>'white','stock'=>'35'],
        	['product_id'=>'10','price'=>'20','size'=>'black','stock'=>'41'],
        ]);
    }
}

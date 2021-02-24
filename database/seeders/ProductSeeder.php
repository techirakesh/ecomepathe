<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
        //product seeder
        DB::table('products')->insert([
           [
            'name'=>'OppO mobile',
            "price"=>"15000",
            "description"=>"a smartphone with 8gb ram  much more  feature   ",
            "category"=>"mobile",
            "gallary"=>"https://i0.wp.com/witchdoctor.co.nz/wp-content/uploads/2018/02/image-1-6.png",
       
           ],
           [
            'name'=>'mi mobile',
            "price"=>"11000",
            "description"=>"a smartphone with 4gb ram  much more  feature   ",
            "category"=>"mobile",
            "gallary"=>"https://static.quickmobileshop.com/cs-photos/products/original/mi-play-dual-sim-64gb-lte-4g-albastru-4gb-ram_10058622_3_1553267505.jpg",
       
           ],
           [
            'name'=>'Dell mobile',
            "price"=>"10000",
            "description"=>"a smartphone with 6gb ram  much more  feature   ",
            "category"=>"mobile",
            "gallary"=>"https://static.clickbd.com/global/classified/item_img/377833_0_original.jpg",
       
           ],
           [
            'name'=>'LG mobile',
            "price"=>"10000",
            "description"=>"a smartphone with 6gb ram  much more  feature   ",
            "category"=>"mobile",
            "gallary"=>"https://icdn6.digitaltrends.com/image/lg-q60-1500x1000.jpg",
       
           ],
           ]);      

    }
}

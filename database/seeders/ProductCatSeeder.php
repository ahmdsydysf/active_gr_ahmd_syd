<?php

namespace Database\Seeders;

use App\Models\Product_category;
use App\Models\Product_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            'مبيدات',
            'اسمدة',
            ' منظمات نمو',



        ];
   // for update data commit olde and open new and udate admin user
            foreach ($status as $index=>$type) {


                Product_category::create(['id'=>$index+1,'category_en' => $type,'category_en'=>$type]);


             }


    }
}

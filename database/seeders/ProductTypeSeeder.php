<?php

namespace Database\Seeders;

use App\Models\Product_category;
use App\Models\Product_type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            [1 => 'فطرية', 2 => 'حشرية', 3 => 'نيناتودية'],
            [4 => 'عناصر كبري', 5 => 'عناصر صغري', 6 => 'أسمدة متخصصة'],
            [7 => 'منظمات نمو']
        ];
        // for update data commit olde and open new and udate admin user


        foreach ($status as $index => $type) {
            foreach ($type as  $i => $ftype) {
                Product_type::create(['id' => $i, 'type_en' => $ftype, 'type_ar' => $ftype, 'category_id' => $index + 1]);
            }
        }
    }
}

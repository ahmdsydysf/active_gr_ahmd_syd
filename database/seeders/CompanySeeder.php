<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Company::create([

            'id' => 1,
            'overview_en' => "lorem",
            'overview_ar' => "خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
   ",
            'mission_en' => null,
            'mission_ar' => null,
            'vision_en' => null,
            'vision_ar' => null,
            'company_video' => null,
        ]);

    }
}

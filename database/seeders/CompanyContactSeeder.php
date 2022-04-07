<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Company_contact;
use Illuminate\Database\Seeder;

class CompanyContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Company_contact::create([

            'id' => 1,
            'address_en'=> "lorem",
        'address_ar'=> "خلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل
        ",
        'phones'=> null,
        'email'=> null,
        'fax'=> null,
        'whatsapp'=> null,
        'google_map'=> null,
        'website'=> null,
        'facebook'=> null,
        'twitter'=> null,
        'linkedin'=> null,
        'instagram'=> null,
        'youtube'=> null,

        ]);

    }
}

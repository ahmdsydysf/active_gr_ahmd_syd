<?php

namespace Database\Seeders;

use App\Models\Service_type;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = [
            'استشارات فنية ',
            'نصائح فنية ',
            '  نصائح عامة',
            '  نصائح زراعية ',



        ];
   // for update data commit olde and open new and udate admin user
            foreach ($status as $index=>$type) {


                Service_type::create(['id'=>$index+1,'service_type' => $type]);


             }
    }
}

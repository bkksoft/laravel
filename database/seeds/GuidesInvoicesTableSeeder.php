<?php

use Illuminate\Database\Seeder;
use App\Models\GuideInvoiceModel;

class GuidesInvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuideInvoiceModel::truncate(); // เคลีย์ ข้อมูล

        $faker = \Faker\Factory::create();

        $faker->locale('th_TH');

        for ($i = 0; $i < 10; $i++) {
            GuideInvoiceModel::create([
                'title' => $faker->name,
            ]);
        }
    }
}

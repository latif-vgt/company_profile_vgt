<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InformationContent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class InformationContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $informationContentConfigs = config('vgt.information_content');

        if (count($informationContentConfigs) > 0) {
            foreach ($informationContentConfigs as $key => $value) {
                InformationContent::create([
                    'key' => $key,
                    'value' => $value
                ]);
            }
        }
    }
}

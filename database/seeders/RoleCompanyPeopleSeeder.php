<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoleCompanyPeople;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleCompanyPeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleCompanyPeople = config('vgt.role_company_people');
        if (count($roleCompanyPeople) > 0) {
            foreach ($roleCompanyPeople as $key => $value) {
                RoleCompanyPeople::create([
                    'name' => $value
                ]);
            }
        }
    }
}

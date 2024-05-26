<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Vehicle;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehicle::create([
        'agmt_no' => 'AGM123',
        'app_id' => '12345',
        'customer_name' => 'Youraj Associate',
        'bkt' => 'BKT321',
        'pos' => 'POT321',
        'tos' => 'TOS3212',
        'reg_number' => 'YOU43212',
        'chassis_no' => 'CHAS21E',
        'engine_no' => 'ENGI432RD',
        'model' => 'MODE987E',
        'product' => 'TVS321RTR',
        'file_name' => 'ASR-432',
        'branch' => 'Noida',
        'customer_mobile_no' => '9876554556',
        'status' => '1',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Device;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeviceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Device::create([
            'name' =>   'HP Probook 450 G5',
            'serial' => '12xx34as',
            'brand' => 'HP',
            'type' => 'Laptop',
            'operating_system' => "Windows 10",
            'procurement_period' => '2022-03-20',
            'procurement_type' => 'Pusat'
        ]);

        Device::create([
            'name' =>   'HP Probook 450 G5',
            'serial' => '12xx34ac',
            'brand' => 'HP',
            'type' => 'Laptop',
            'operating_system' => "Windows 10",
            'procurement_period' => '2022-03-20',
            'procurement_type' => 'Pusat'
        ]);

        Device::create([
            'name' =>   'Lenovo Ideapad 14 ISK',
            'serial' => '11xx34ac',
            'brand' => 'Lenovo',
            'type' => 'Laptop',
            'operating_system' => "Windows 7",
            'procurement_period' => '2021-04-16',
            'procurement_type' => 'Daerah'
        ]);

        Device::create([
            'name' =>   'Lenovo Thinkbook Series',
            'serial' => '11xx34fc',
            'brand' => 'Lenovo',
            'type' => 'Laptop',
            'operating_system' => "Windows 11",
            'procurement_period' => '2022-05-20',
            'procurement_type' => 'Daerah'
        ]);

        Device::create([
            'name' =>   'Dell Vostro',
            'serial' => '11xx34ds',
            'brand' => 'Dell',
            'type' => 'Laptop',
            'operating_system' => "Windows 11",
            'procurement_period' => '2022-03-21',
            'procurement_type' => 'Daerah'
        ]);
    }
}

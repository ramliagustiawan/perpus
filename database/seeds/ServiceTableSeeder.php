<?php

use Illuminate\Database\Seeder;
use App\Service;


class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'title'=>'IUMK',
            'description'=>'Ijin Usaha Mikro Kecil'
        ]);

        Service::create([
            'title'=>'Dispensasi Nikah',
            'description'=>'Dispensasi Untuk Keperluan Nikah'
        ]);
    }
}

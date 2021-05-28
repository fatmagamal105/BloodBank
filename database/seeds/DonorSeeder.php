<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DonorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('donors')->insert([
            'username' => Str::random(10),
            'phone' => Str::random(10),
            'governor' => Str::random(10),
            'address' => Str::random(10),
            'contact_type' => Str::random(10),
            'contact_time' => Str::random(10),
            'type' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
        ]);
    }
}

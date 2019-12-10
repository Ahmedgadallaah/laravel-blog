<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
        	'site_name' => "laravel blog",
        	'address' => 'egypt,Menofia',
        	'contact_number' => '01094121941',
        	'contact_email' => 'ahmedgadallah19@get.com',

        ]);
    }
}

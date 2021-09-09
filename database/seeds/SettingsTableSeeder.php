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
            'site_name' => "Edd's Blog",
            'address' => 'Accra Ghana',
            'contact_number' => '+233 20 2020202',
            'contact_email' => 'edwinashie289@gmail.com'
        ]);
    }
}

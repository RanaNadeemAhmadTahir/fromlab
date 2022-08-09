<?php

use Database\Seeders\RolesTableSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RolesTableSeeder::class);

        DB::table('users')->insert([
            'role' => '1',  //admin
            'name' => 'rana',
            'id' => '1',
            'password' => '$2y$10$6kRFE4e4Bbtxp7JP/gq2h.tcMZ4VFAYeW.eE8HAyrxGkiSNwr/tzK',  //12345678
            'email' => 'admin@admin.com',
        ]);
    }
}

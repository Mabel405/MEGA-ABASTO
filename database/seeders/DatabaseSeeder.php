<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    // use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run()
    {
        //$this->call(DocumentoSeeder::class);
        //$this->call(ComprobanteSeeder::class);
        $this->call(UserSeeder::class);
        // $this->call(PermissionSeeder::class);
    }
}

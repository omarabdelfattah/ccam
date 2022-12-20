<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Souhil Roubah',
            'username' =>'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678'),
            'lang_code' => 'ar'
        ]);
    }
}

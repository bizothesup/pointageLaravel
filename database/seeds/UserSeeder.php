<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::truncate();

        \App\User::create([
                'name' => 'Mbaye Babacar Sarr',
                'password' => bcrypt('1234567890'),
                'email' => 'mbs@admin.com'
        ]);

    }
}

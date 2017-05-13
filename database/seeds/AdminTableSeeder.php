<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            'name' => 'テスト',
            'email' => 'admin@example.com',
            'password' => bcrypt('adminpass'),
        ]);
    }
}

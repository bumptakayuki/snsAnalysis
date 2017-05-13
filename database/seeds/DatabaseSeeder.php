<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class); ←今回こちらは流さなくてもOK
        $this->call(AdminTableSeeder::class);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\user;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Abdullah',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'role' => 'admin', 
        ]);
        
    }
}

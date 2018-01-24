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
        DB::table('users')->insert([
            'first_name'=>'John',
            'last_name'=>'Doe',
            'email' => "johndoe@example.com",
            'password' => "johndoe"
        ]);    
    }
}

<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
        	'name' => 'Example Company',
        	'address' => 'Sesame Street Barangay Example, Example City',
            'email' => "johndoe@example.com",
            'user_id' => 1
        ]);
    }
}

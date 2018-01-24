<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
        	'first_name' => 'Jonn',
            'last_name' => "Doe",
            'role_id' => 1,
            'company_id' => 1
        ]);
    }
}

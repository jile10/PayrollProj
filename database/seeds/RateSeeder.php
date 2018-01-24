<?php

use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rates')->insert([
            'amount' => 800.00,
            'role_id' => 1,
            'ratetype_id' => 1,
        ]);
    }
}

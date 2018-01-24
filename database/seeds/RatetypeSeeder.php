<?php

use Illuminate\Database\Seeder;

class RatetypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratetypes')->insert([
            'name' => "Hourly"
        ]);
    }
}

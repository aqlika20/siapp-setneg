<?php

use Illuminate\Database\Seeder;

class ShiftsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shifts')->insert([
        	'name' => 'Shift 1 (07.00-15.00)'
        ]);

        DB::table('shifts')->insert([
        	'name' => 'Shift 2 (15.00-23.00)'
        ]);

        DB::table('shifts')->insert([
        	'name' => 'Shift 3 (23.00-07.00)'
        ]);
    }
}

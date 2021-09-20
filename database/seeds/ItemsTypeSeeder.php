<?php

use Illuminate\Database\Seeder;

class ItemsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items_type')->insert([
        	'name' => 'Major-Minor Item'
        ]);

        DB::table('items_type')->insert([
        	'name' => 'Dextrin'
        ]);

        DB::table('items_type')->insert([
        	'name' => 'Refined Sugar'
        ]);

        DB::table('items_type')->insert([
        	'name' => 'Packaging'
        ]);

        DB::table('items_type')->insert([
        	'name' => 'Icing Sugar'
        ]);
    }
}

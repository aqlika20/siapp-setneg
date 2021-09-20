<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'name' => 'Super Admin'
        ]);

        DB::table('roles')->insert([
        	'name' => 'PPIC'
        ]);

        DB::table('roles')->insert([
        	'name' => 'Warehouse'
        ]);

        DB::table('roles')->insert([
        	'name' => 'Production - Icing'
        ]);

        DB::table('roles')->insert([
        	'name' => 'Production - Batching 1'
        ]);

        DB::table('roles')->insert([
        	'name' => 'Production - Batching 2'
        ]);

        DB::table('roles')->insert([
        	'name' => 'Filling'
        ]);
    }
}

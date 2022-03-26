<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([          
            [
                'name' => 'Trips',      
            ], 
            [
                'name' => 'Food',      
            ], 
            [
                'name' => 'Business',      
            ], 
            [
                'name' => 'health and sports',      
            ], 
            [
                'name' => 'Games',      
            ], 

        ]);
    }
}

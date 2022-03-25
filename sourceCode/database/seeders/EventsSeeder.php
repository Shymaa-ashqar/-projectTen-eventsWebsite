<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'name' => 'Jordan Trail',   
                'description'=> 'hike history.touch time.',   
                'img'=> '../images/ex1.jpg', 
                'price'=> '10', 
                'location'=> 'Amman', 
                'category_id'=> '1', 
                'date'=> Carbon::create('2000', '01', '01')
            ], 
           
            [
                'name' => 'Downtown Amman',   
                'description'=> 'in the footsteps of myths and men',   
                'img'=> '../images/ex2.jpg', 
                'price'=> '10', 
                'location'=> 'Amman', 
                'category_id'=> '1', 
                'date'=> Carbon::create('2000', '01', '01')
            ], 
            [
                'name' => 'Dead Sea',   
                'description'=> 'life at your own pace.',   
                'img'=> '../images/ex3.jpg', 
                'price'=> '10', 
                'location'=> 'Amman', 
                'category_id'=> '1', 
                'date'=> Carbon::create('2000', '01', '01')
            ],  

        ]);
    }
}

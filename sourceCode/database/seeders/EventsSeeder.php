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
                'description'=> 'Hike history.touch time.a long-distance hiking trail 
                in Jordan connecting the length of Jordan from Um Qais in the north to Aqaba in the south.',   
                'img'=> '../images/ex1.jpg', 
                'price'=> '10', 
                'location'=> 'Amman', 
                'category_id'=> '1', 
                'date'=> Carbon::create('2000', '01', '01')
            ], 
           
            [
                'name' => 'Downtown Amman',   
                'description'=> 'In the footsteps of myths and men.One of the most lively and authentic 
                parts of Amman consisting of fascinating historical sites of the Roman Theatre and Citadel.',   
                'img'=> '../images/ex2.jpg', 
                'price'=> '10', 
                'location'=> 'Amman', 
                'category_id'=> '1', 
                'date'=> Carbon::create('2000', '01', '01')
            ], 
            [
                'name' => 'Dead Sea',   
                'description'=> 'At 410m below sea level, the Dead Sea is the lowest place on earth. Jordan’s Dead Sea coast is one of the most spectacular natural and spiritual landscapes in the world, and it remains as enticing tointernational visitors today as it was to kings, emperors, traders, and prophets in antiquity. The main attraction of the Dead Sea is of course the soothing, abnormally salty water itself. The salt content of the water is 31.5% making the water so buoyant that it is impossible for the visitor to sink. The water also contains 21 minerals including high levels of magnesium, sodium, potassium, and bromine and 12 of these minerals are found in no other body of water in the world. Studies have shown the combination of the Dead Sea water and the rich black mud found along the shoreline to have significant health benefits including increasing circulation, easing discomfort from arthritis, healing allergies, and revitalizing skin',   
                'img'=> '../images/ex3.jpg', 
                'price'=> '10', 
                'location'=> 'Amman', 
                'category_id'=> '1', 
                'date'=> Carbon::create('2000', '01', '01')
            ], 
            [
                'name' => 'Petra',   
                'description'=> 'The ancient city of Petra is one of Jordans national treasures and by far its best known tourist attraction. 
                Located approximately three hours south of Amman, Petra is the legacy of the Nabataeans, an industrious Arab people who settled
                 in southern Jordan more than 2,000 years ago. Admired then for its refined culture, massive architecture and ingenious complex 
                 of dams and water channels, Petra is now a UNESCO World Heritage Site that enchants visitors from all corners of the globe.
                  Much of Petra appeal comes from its spectacular setting deep inside a narrow desert gorge.
                 The site is accessed by walking through a kilometre long chasm (or siq), the walls of which soar 200m upwards',   
                'img'=> 'https://international.visitjordan.com/uploads/experiences/cf7e7e24-2cc0-4e22-9a5d-e07304b88832..png', 
                'price'=> '10', 
                'location'=> 'Petra', 
                'category_id'=> '1', 
                'date'=> Carbon::create('2000', '01', '01')
            ],  
            [
                'name' => 'Umm Qays',   
                'description'=> 'Perched on a splendid hilltop overlooking the Jordan Valley and the Sea of Galilee, Umm Qays boasts impressive ancient remains, such as the stunning black basalt theatre, the basilica and adjacent courtyard strewn with nicely carved black sarcophagi, the colonnaded main street and a side street lined with shops, an underground mausoleum, two baths, a nymphaeum, a city gate and the faint outlines of what was a massive hippodrome.',   
                'img'=> 'https://international.visitjordan.com/uploads/experiences/ab764d91-81e2-45d3-bafd-307fb2876ab2..png', 
                'price'=> '10', 
                'location'=> 'Umm Qays', 
                'category_id'=> '1', 
                'date'=> Carbon::create('2000', '01', '01')
            ],  
            [
                'name' => 'shams el balad',   
                'description'=> 'Food, drinks, culture & design from the heart of Amman
                Open everyday 10AM - 11PM ',   
                'img'=> 'https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/efdebb59980167.5a372b98d0d96.jpg', 
                'price'=> '10', 
                'location'=> 'Amman', 
                'category_id'=> '2', 
                'date'=> Carbon::create('2000', '01', '01')
            ], 
            [
                'name' => 'Dar Ne3meh',   
                'description'=> 'Dar Ne’meh “house of bliss” is an old 1950s house that has been newly renovated to provide
                 our guests with an experience of
                 contemporary Jordanian culture in the heart of Amman through our Restaurant, Cafe, Gift Shop and Ambiance. ',   
                'img'=> 'https://scontent.famm6-1.fna.fbcdn.net/v/t39.30808-6/187745739_688435249224666_6153086324276749212_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=a26aad&_nc_ohc=ByNDAFYR15sAX-Hu3Mp&_nc_ht=scontent.famm6-1.fna&oh=00_AT9NGsRj6YuXpVvBplw7lOK6pwE82x4w6NXdxkkQnlHusg&oe=6242FA13', 
                'price'=> '10', 
                'location'=> 'Jabal Amman', 
                'category_id'=> '2', 
                'date'=> Carbon::create('2000', '01', '01')
            ], 
            [
                'name' => 'Rumi',   
                'description'=> 'Rumi is a coffeehousethat primarily serves coffee of various types, e.g.
                 espresso, latte, and cappuccino.
                 also, serves cold drinks, such as iced coffee, iced tea, and other non-caffeinated beverages.',   
                'img'=> 'https://scontent.famm6-1.fna.fbcdn.net/v/t1.6435-9/120540205_1810810115733163_2343594395689814490_n.jpg?stp=dst-jpg_p526x296&_nc_cat=103&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=ir511Ah7exgAX_v3tQN&_nc_ht=scontent.famm6-1.fna&oh=00_AT9ieWfGF4_agLQdFhbvBfcMfGnzciRa78ulFaBvlBeS3w&oe=62624470', 
                'price'=> '10', 
                'location'=> 'Jabal el weibdeh', 
                'category_id'=> '2', 
                'date'=> Carbon::create('2000', '01', '01')
            ], 
            [
                'name' => 'Oliva',   
                'description'=> 'Inspired by a love of design, food, Italy and our hometown Amman, Oliva was established in 2012 on a quiet street corner in the neighbourhood of Weibdeh, Amman.',   
                'img'=> 'https://scontent.famm6-1.fna.fbcdn.net/v/t1.6435-9/120755077_3487731201275092_7760746308870702329_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=RzMmgWh-UWkAX-D-2kr&_nc_ht=scontent.famm6-1.fna&oh=00_AT_sZ1WDCk-33UBOX7gx3G5Z7GhhBD1MGo7FF0kM2_8JEA&oe=62650C40', 
                'price'=> '10', 
                'location'=> 'Jabal el weibdeh', 
                'category_id'=> '2', 
                'date'=> Carbon::create('2000', '01', '01')
            ], 

        ]);
    }
}

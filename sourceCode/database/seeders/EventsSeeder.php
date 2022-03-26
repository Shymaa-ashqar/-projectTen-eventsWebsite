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
                'name' => 'Beit setti',   
                'description'=> 'Beit Sitti is a cooking and dining experience located in Jabal Al Weibdeh. Come learn to make a 4 course arabic meal, then sit back and unwind with good food, the beats of the city, and the dazzling view of old Amman ',   
                'img'=> 'https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/efdebb59980167.5a372b98d0d96.jpg', 
                'price'=> '10', 
                'location'=> 'Jabal Amman', 
                'category_id'=> '2', 
                'date'=> Carbon::create('2000', '01', '01')
            ], 
           
            [
                'name' => 'Iot workshop',   
                'description'=> 'The Internet of things describes physical objects with sensors, processing ability, software, and other technologies that connect and exchange data with other devices 
                and systems over the Internet or other communications networks',   
                'img'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2wPWXGPyP3gZ-czHk50-O8RytVHqEW36GNA&usqp=CAU', 
                'price'=> '10', 
                'location'=> 'Online', 
                'category_id'=> '3', 
                'date'=> Carbon::create('2000', '01', '01')
            ], 
            [
                'name' => 'Meditation workshop',   
                'description'=> 'Why We Should Do Meditation?
                Gaining a new perspective on stressful situations.
                Building skills to manage your stress.
                Increasing self-awareness.
                Focusing on the present.
                Reducing negative emotions.
                Increasing imagination and creativity.
                Increasing patience and tolerance.
                Reduces stress. Meditation can help alleviate stress from just about any situation you may be in.
                Promotes productivity. If you meditate daily youll notice a boost in your productivity
                Helps you stay focused
                Improves relationships
                Regulates mood',   
                'img'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSM6w3v__9IX2EAaQlMAVUXvBLcj-JNm_IqAA&usqp=CAU', 
                'price'=> '10', 
                'location'=> 'Golds gym', 
                'category_id'=> '4', 
                'date'=> Carbon::create('2000', '01', '01')
            ],
            [
                'name' => 'Virtual Lego Club: Super Mario Day!',   
                'description'=> 'Join us for our monthly virtual Lego Club. Meet up with like-minded builders and creators! This month our theme is Story Time Lego. Please register through our events calendar on the website www.sudburylibraries.ca. Once registered, you will receive a link to a zoom meeting a day prior to the event. Our March session celebrates Super Mario Day! WAHOO!',   
                'img'=> 'https://cdn-az.allevents.in/events2/banners/e0c483cfd668cf454c90916c8fdeafcc31b453fa1649f167604e8384325b10cc-rimg-w526-h296-gmir.jpg?v=1647306350', 
                'price'=> '10', 
                'location'=> 'Online', 
                'category_id'=> '5', 
                'date'=> Carbon::create('2000', '01', '01')
            ],  

        ]);
    }
}

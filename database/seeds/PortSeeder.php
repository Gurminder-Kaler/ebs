<?php

use Illuminate\Database\Seeder;
use App\Portfolio;

class PortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        $s1 = Portfolio::create([
        	'id'=>'1',
        	'img'=>'image/demo.jpg',
        	'title'=>'Delhi Public School Subhanpur',
        	'tech_used'=>'Php Laravel',
        ]);
        $s1->save();

        $s2 = Portfolio::create([
        	'id'=>'2',
        	'img'=>'image/demo.jpg',
        	'title'=>'Ezucator',
        	'tech_used'=>'Php Laravel',
        ]);
        $s2->save();

         $s3 = Portfolio::create([
        	'id'=>'3',
        	'img'=>'image/demo.jpg',
        	'title'=>'GATEUNION',
        	'tech_used'=>'Hmtl Php Laravel',
        ]);
        $s3->save();
    }
}

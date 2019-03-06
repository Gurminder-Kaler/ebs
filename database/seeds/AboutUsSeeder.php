<?php

use Illuminate\Database\Seeder;
use App\AboutUs;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $s1 = AboutUs::create([
        	'about_us_content'=>'
Ebslon Infotech was founded in the year 2016, with the vision to think strategically, contribute significantly, work independently, and deliver strong and fast knowledge. The company is powered by a growing portfolio of specialized IT solutions addressing critical business challenges, including Web Designing Digital Marketing, Web Development, Web Hosting, App Development.

We at Ebslon Infotech strongly believe that a big gap exists in the IT industry that needs to be filled up. The greatest gap arises out of the differences between the consumer needs and available industry solution. We are committed and perennially strive for bringing better IT solutions and working on a mission mode towards our goal to eliminate the gap through digital innovations. Considering the pivotal role of IT industry in dealing with key issues having local to global significance, we treat dedication as our commitment.

The company provides solutions to enterprises and services through a combination of traditional and newer IT solutions for bringing a synergetic effect. Our company has demonstrable experience in customized software development and database application development.

Ebslon is a global software technology solutions and recruitment service provider company with 100+ dedicated personnel. Based in India, we are a professionally recognized software development company having experience, exposure and expertise in developing need-based IT solutions. Our core team provides the professional expertise needed to develop an integrated technology solution.

Ebslon is not just a company but a mission that aims at tapping the clients’ needs. Accordingly, our skilled programmers create innovative, end-to-end IT solution that is highly unique and customized.

Our service delivery spans from delivering and optimizing IT solutions from the initial phase of scoping the requirements, up to the final delivery, maintenance and continuous up-gradation and up-scaling. At Ebslon, consumer needs are a basis for consumer solutions. Every IT solution here is customized and optimized.'
        ]);
    }
}

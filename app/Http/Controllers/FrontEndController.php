<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
    public function blog()
    {
    	return view('blog.blog');
    } 
    
    public function portfolio()
    {
    	return view('portfolio.portfolio');
    }
    
	public function contact()
    {
    	return view('contact.contact');
    }

    public function about()
    {
        $about = DB::select('select * from about_us');
    	return view('about.about',compact('about'));
    }
        
    public function view_service_content_writing()
    {
    	return view('services.content_writing');
    }

    public function view_service_digital_marketing()
    {
    	return view('services.digital_marketing');
    }

    public function view_service_mobile_app_development()
    {
    	return view('services.mobile_app_development');
    }

    public function view_service_web_designing()
    {
    	return view('services.web_designing');
    }

    public function view_service_web_development()
    {
    	return view('services.web_development');
    }
    
	public function view_service_web_hosting()
    {
    	return view('services.web_hosting');
    }

}

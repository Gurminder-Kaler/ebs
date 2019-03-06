<?php

namespace App\Http\Controllers\Admin;
use App\AboutUs;
use DB;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {

    	$about = AboutUs::findorFail(1) ;
        // $about_us_content =$about->about_us_content;
        // $mission_content = $about->mission_content;
        // $vision_content = $about->vision_content;
        // $core_values_content = $about->core_values_content;
        return view('admin.about.index',compact('about'));
    }
    public function update($id,Request $request)
    {
        
    }
}

<?php

namespace App\Http\Controllers\Admin;
use App\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {

    	$test = Testimonial::all() ;
        // $about_us_content =$about->about_us_content;
        // $mission_content = $about->mission_content;
        // $vision_content = $about->vision_content;
        // $core_values_content = $about->core_values_content;
        return view('admin.testimonials.index',compact('test'));
    }
    public function create()

    {
     return view('admin.testimonials.create');    
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'content'=>'required'
        ]);
        $requestData = $request->all();

        Testimonial::create($requestData);
        return view('admin.testimonials.create');
    }

    public function update($id,Request $request){
        
        $this->validate($request, [
            'services' => 'required',
            'content' => 'required'
        ]);
        $input = $request->all();
        $s= Testimonial::findorFail($id);
        $s->update($input);
  
        return view('admin.testimonials.index');
      
    }
      public function destroy($id)
    {
        //  
            Testimonial::destroy($id);
              return redirect('admin/testimonials');
    }
}

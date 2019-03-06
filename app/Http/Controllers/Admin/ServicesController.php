<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Service;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
    	$query = DB::select('select * from services');
        return view('admin.services.index',compact('query'));
    }
    public function edit($id)
    {
        $services =Service::findorFail($id);
        return view('admin.services.edit',compact('services'));
    }



    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'services' => 'required',
            'content' => 'required'
        ]);
        $requestData = $request->all();

        Service::create($requestData);
        return view('admin.services.create');
    }

    public function update($id,Request $request){
        
        $this->validate($request, [
            'services' => 'required',
            'content' => 'required'
        ]);
        $input = $request->all();
        $s= Service::findorFail($id);
        $s->update($input);
  
        return view('admin.services.index');
      
    }
      public function destroy($id)
    {
        //  
            Service::destroy($id);
              return redirect('admin/services');
    }
}

<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Service;


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
        
    }
    public function create()
    {
        return view('admin.services.create');
    }

    public function storetodatabase(){
        // $name =    $request->
         // dd($request->all());
        $s = new Service;
        $s->content = Input::get('content');
        $s->services = Input::get('service');
        $s->save();
        return redirect('admin.');
        // Service::create($input);
        // $qry = "INSERT into services (`service`,`content`)values('$service','$content')";
        // return view('admin.services.index');
    }
}

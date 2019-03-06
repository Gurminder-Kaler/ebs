<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Portfolio;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
    	$query = Portfolio::all();
        return view('admin.portfolio.index',compact('query'));
    }
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'location' => 'required',
            'content' => 'required',
            'name'=>'required'
        ]);
        $requestData = $request->all();

        Portfolio::create($requestData);
        return view('admin.services.create');

    }
    public function update()
    {
        // $query = DB::update('update ')
    }
    public function edit($id)
    {
        $port = Portfolio::findorFail($id);
        return view('admin.portfolio.edit',compact('port'));
    }
    public function create()
    {
        return view('admin.portfolio.create');
    }
}
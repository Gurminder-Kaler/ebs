<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

class ContactQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
    	$query = DB::select('select * from contact_query');
        return view('admin.contact_queries.index',compact('query'));
    }
    public function update()
    {
        // $query = DB::update('update ')
    }
}

<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ContactUsFooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        return view('admin.dashboard');
    }
}
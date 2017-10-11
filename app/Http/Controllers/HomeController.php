<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['employee', 'superadmin', 'admin', 'iis_section_head', 'srs_section_head', 'commel_section_head']);
        return view('home');
    }

    // public function someAdminStuff(Request $request)
    // {
    //     $request->user()->authorizeRoles('superadmin');
    //     return view('superadmin.home');
    // }

    

}

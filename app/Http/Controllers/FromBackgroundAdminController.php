<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FromBackgroundAdminController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adminpage.background.from-admin-background');
    }

    public function admin(){
        return view('admin.index');
    }
}

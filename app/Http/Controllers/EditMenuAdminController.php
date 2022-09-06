<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditMenuAdminController extends Controller
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
        return view('adminpage.menu.edit-admin-menu');
    }

    public function admin(){
        return view('admin.index');
    }
}

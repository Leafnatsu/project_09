<?php

namespace App\Http\Controllers;

use App\Models\Background;
use Illuminate\Http\Request;

class BackgroundController extends Controller
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
        return view('adminpage.background.adminbackground');
    }

    public function from_add()
    {
        return view('adminpage.background.from-admin-background');
    }

    public function add(Request $request){
        $background = new Background();
        $background->detail = $request->detail;
        $background->save();
        // toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.background.adminbackground');
    }

    public function admin(){
        return view('admin.index');
    }
}

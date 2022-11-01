<?php

namespace App\Http\Controllers;

use App\Models\Background;
use App\Models\Backgrounds;
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
        $background = Backgrounds::Paginate(4);
        return view('adminpage.background.adminbackground',compact('background'));
    }

    public function from_add()
    {
        return view('adminpage.background.from-admin-background');
    }

    public function add(Request $request){
        $backgrounds = new Backgrounds();
        $backgrounds->detail = $request->detail;
        $backgrounds->save();
        // toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.background.adminbackground');
    }

    public function admin(){
        return view('admin.index');
    }
}

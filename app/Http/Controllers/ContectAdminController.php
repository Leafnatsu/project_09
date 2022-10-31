<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contect;
use App\Models\Contects;
use App\Models\Contents;

class ContectAdminController extends Controller
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
        return view('adminpage.contect.admincontect');
    }

    public function from_add()
    {
        return view('adminpage.contect.from-admin-contect');
    }

    public function add(Request $request){
        $about = new Contents();
        $about->name = $request->name;
        $about->save();
        // toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.contect.admincontect');
    }

    public function admin(){
        return view('admin.index');
    }
}

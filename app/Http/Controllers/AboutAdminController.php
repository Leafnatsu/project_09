<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use Illuminate\Http\Request;

class AboutAdminController extends Controller
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
        $abouts = Abouts::Paginate(4);
        return view('adminpage.about.adminabout',compact('abouts'));
    }

    public function from_add()
    {
        return view('adminpage.about.from-admin-about');
    }

    public function add(Request $request){
        $about = new Abouts();
        $about->name = $request->name;
        $about->save();
        // toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.about.adminabout');
    }

    public function edit($id){
        $about = Abouts::find($id);
        return view('adminpage.about.edit-admin-about',compact('about'));
    }

    public function update(Request $request, $id){
        $about = Abouts::find($id);
        $about->name = $request->name;
        $about->update();
        // toast('แก้ไขข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.about.adminabout');
    }

    public function admin(){
        return view('admin.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Abouts;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;
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
        if ($request->hasFile('image')) {

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg

            $request->file('image')->move(public_path() . '/admin/upload/about/', $filename);

            Image::make(public_path() . '/admin/upload/about/' . $filename);

            $about->image = $filename;

        } else {

            $about->image = 'nopic.jpg';

        }
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
        if ($request->hasFile('image')) {

            $about = Abouts::find($id);

             // ลบรูปภาพ

            if ($about->image != 'nopic.jpg') {

                File::delete(public_path() . '/admin/upload/about/' . $about->image);

            }

            //เพิ่มรูปภาพ

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg

            $request->file('image')->move(public_path() . '/admin/upload/about/', $filename);

            Image::make(public_path() . '/admin/upload/about/' . $filename);

            $about->image = $filename;

            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ

            $about->name = $request->name;

        } else{
        $about->name = $request->name;
        $about->update();
    }
        // toast('แก้ไขข้อมูลสำเร็จ','success');
        $about->update();
        return redirect()->route('adminpage.about.adminabout');
    
}

    public function delete($id){
        $about = Abouts::find($id);
        $about->delete();
        // toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.about.adminabout');
    }

    public function admin(){
        return view('admin.index');
    }
}

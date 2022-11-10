<?php

namespace App\Http\Controllers;

use App\Models\Background;
use App\Models\Backgrounds;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;
use File;

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
        if ($request->hasFile('image')) {

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg

            $request->file('image')->move(public_path() . '/admin/upload/backgrounds/', $filename);

            Image::make(public_path() . '/admin/upload/backgrounds/' . $filename);

            $backgrounds->image = $filename;

        } else {

            $backgrounds->image = 'nopic.jpg';

        }

        $backgrounds->save();
        // toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.background.adminbackground');
    }

    public function edit($id){
        $backgrounds = Backgrounds::find($id);
        return view('adminpage.background.edit-admin-background',compact('backgrounds'));
    }

    public function update(Request $request, $id){
        $backgrounds = Backgrounds::find($id);
        if ($request->hasFile('image')) {

            $backgrounds = Backgrounds::find($id);

             // ลบรูปภาพ

            if ($backgrounds->image != 'nopic.jpg') {

                File::delete(public_path() . '/admin/upload/backgrounds/' . $backgrounds->image);

            }

            //เพิ่มรูปภาพ

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg

            $request->file('image')->move(public_path() . '/admin/upload/backgrounds/', $filename);

            Image::make(public_path() . '/admin/upload/backgrounds/' . $filename);

            $backgrounds->image = $filename;

            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ

            $backgrounds->detail = $request->detail;

        } else{

        $backgrounds->detail = $request->detail;
        $backgrounds->update();
    }
        // toast('แก้ไขข้อมูลสำเร็จ','success');
        $backgrounds->update();
        return redirect()->route('adminpage.background.adminbackground');
}

    public function delete($id){
        $backgrounds = Backgrounds::find($id);
        $backgrounds->delete();
        // toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.background.adminbackground');
    }

    public function admin(){
        return view('admin.index');
    }
}

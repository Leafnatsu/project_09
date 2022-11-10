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
        $content = Contents::Paginate(4);
        return view('adminpage.contect.admincontect',compact('content'));
    }

    public function from_add()
    {
        return view('adminpage.contect.from-admin-contect');
    }

    public function add(Request $request){
        $content = new Contents();
        $content->name = $request->name;
        $content->save();
        // toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.contect.admincontect');
    }

    public function edit($id){
        $content = Contents::find($id);
        return view('adminpage.contect.edit-admin-contect',compact('content'));
    }

    public function update(Request $request, $id){
        $content = Contents::find($id);
        $content->name = $request->name;
        $content->update();
        // toast('แก้ไขข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.contect.admincontect');
    }

    public function delete($id){
        $content = Contents::find($id);
        $content->delete();
        // toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.contect.admincontect');
    }

    public function admin(){
        return view('admin.index');
    }
}

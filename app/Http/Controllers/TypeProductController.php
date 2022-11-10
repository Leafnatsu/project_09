<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeProduct;
use Illuminate\Support\Str;
use Image;
use File;

class TypeProductController extends Controller
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
        $typeproduct = TypeProduct::Paginate(4);
        return view('adminpage.typeproduct.admintypeproduct',compact('typeproduct'));
    }
    
    public function from_add()
    {
        return view('adminpage.typeproduct.from-admin-typeproduct');
    }

    public function add(Request $request){
        $type_product = new TypeProduct();
        $type_product->name = $request->name;

        if ($request->hasFile('image')) {

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg

            $request->file('image')->move(public_path() . '/admin/upload/type_product/', $filename);

            Image::make(public_path() . '/admin/upload/type_product/' . $filename);

            $type_product->image = $filename;

        } else {

            $type_product->image = 'nopic.jpg';

        }

        $type_product->save();
        // toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.type-product.adminproduct');
    }

    public function edit($id){
        $typeproduct = TypeProduct::find($id);
        return view('adminpage.typeproduct.edit-admin-typeproduct',compact('typeproduct'));
    }

    public function update(Request $request, $id){
        $type_product = TypeProduct::find($id);
        if ($request->hasFile('image')) {

            $type_product = TypeProduct::find($id);

             // ลบรูปภาพ

            if ($type_product->image != 'nopic.jpg') {

                File::delete(public_path() . '/admin/upload/type_product/' . $type_product->image);

            }

            //เพิ่มรูปภาพ

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg

            $request->file('image')->move(public_path() . '/admin/upload/type_product/', $filename);

            Image::make(public_path() . '/admin/upload/type_product/' . $filename);

            $type_product->image = $filename;

            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ

            $type_product->name = $request->name;

        } else{
        $type_product->name = $request->name;
        $type_product->update();
    }
    // toast('แก้ไขข้อมูลสำเร็จ','success');
        $type_product->update();
        return redirect()->route('adminpage.type-product.adminproduct');
    }

    public function delete($id){
        $type_product = TypeProduct::find($id);
        $type_product->delete();
        // toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.type-product.adminproduct');
    }

    public function admin(){
        return view('admin.index');
    }
}

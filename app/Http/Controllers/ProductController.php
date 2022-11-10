<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\TypeProduct;
use Illuminate\Support\Str;
use Image;
use File;

class ProductController extends Controller
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
        $product = Product::Paginate(4);
        return view('adminpage.product.adminproduct',compact('product'));
    }

    public function from_add()
    {
        $typeproduct = TypeProduct::all();
        return view('adminpage.product.from-admin-product',compact('typeproduct'));
    }

    public function add(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->price = $request->price;
        $product->id_type_product = $request->id_type_product;
        if ($request->hasFile('image')) {

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg

            $request->file('image')->move(public_path() . '/admin/upload/product/', $filename);

            Image::make(public_path() . '/admin/upload/product/' . $filename);

            $product->image = $filename;

        } else {

            $product->image = 'nopic.jpg';

        }

        $product->save();
        // toast('บันทีกข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.product.adminproduct');
    }

    public function edit($id){
        $typeproduct = TypeProduct::all();
        $product = Product::find($id);
        return view('adminpage.product.edit-admin-product',compact('product','typeproduct'));
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        if ($request->hasFile('image')) {

            $product = Product::find($id);

             // ลบรูปภาพ

            if ($product->image != 'nopic.jpg') {

                File::delete(public_path() . '/admin/upload/product/' . $product->image);

            }

            //เพิ่มรูปภาพ

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();   //025G025365.jpg

            $request->file('image')->move(public_path() . '/admin/upload/product/', $filename);

            Image::make(public_path() . '/admin/upload/product/' . $filename);

            $product->image = $filename;

            //เพิ่มฟิล์ดในกรณีที่มีรูปภาพ

            $product->name = $request->name;
            $product->detail = $request->detail;
            $product->price = $request->price;
            $product->id_type_product = $request->id_type_product;

        } else{

        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->price = $request->price;
        $product->id_type_product = $request->id_type_product;
        $product->update();
    }
    // toast('แก้ไขข้อมูลสำเร็จ','success');
        $product->update();
        return redirect()->route('adminpage.product.adminproduct');
    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        // toast('ลบข้อมูลสำเร็จ','success');
        return redirect()->route('adminpage.product.adminproduct');
    }

    public function admin(){
        return view('admin.index');
    }
}

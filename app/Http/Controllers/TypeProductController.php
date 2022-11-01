<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeProduct;

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
        $type_product->name = $request->name;
        $type_product->update();
        // toast('แก้ไขข้อมูลสำเร็จ','success');
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

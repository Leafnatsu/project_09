<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// ของจารสา
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about',function(){
//     return "หน้าเกี่ยวกับเรา";
// });


//Start Promote//
 Route::view('/', 'promotepage.home')->name('promotepage.home');
 Route::view('/about', 'promotepage.about')->name('promotepage.about');
 Route::view('/menu', 'promotepage.menu')->name('promotepage.menu');
 Route::view('/hot', 'promotepage.hot')->name('promotepage.hot');
 Route::view('/contract', 'promotepage.contract')->name('promotepage.contract');
 Route::view('/info', 'promotepage.info')->name('promotepage.info');
 Route::view('/cart', 'promotepage.cart')->name('promotepage.cart');
 Route::view('/login', 'auth.login')->name('promotepage.login');

//End Promote//

Auth::routes();




//Start Admin//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('adminpage.adminhome');

Route::get('/admin/user', [App\Http\Controllers\UserController::class, 'index'])->name('adminpage.user.adminuser');
Route::get('/admin/user/edit', [App\Http\Controllers\EditUserAdminController::class, 'index'])->name('adminpage.user.edit');
Route::get('/admin/user/from', [App\Http\Controllers\FromUserAdminController::class, 'index'])->name('adminpage.user.from');

Route::get('/admin/type-product', [App\Http\Controllers\TypeProductController::class, 'index'])->name('adminpage.type-product.adminproduct');
Route::get('/admin/type-product/from', [App\Http\Controllers\TypeProductController::class, 'from_add'])->name('adminpage.type-product.from_add');
Route::post('/admin/type-product/add', [App\Http\Controllers\TypeProductController::class, 'add'])->name('adminpage.type-product.add');


Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'index'])->name('adminpage.product.adminproduct');
Route::get('/admin/product/from', [App\Http\Controllers\ProductController::class, 'from_add'])->name('adminpage.product.from_add');
Route::post('/admin/product/add', [App\Http\Controllers\ProductController::class, 'add'])->name('adminpage.product.add');

Route::get('/admin/about', [App\Http\Controllers\AboutAdminController::class, 'index'])->name('adminpage.about.adminabout');
Route::get('/admin/about/from', [App\Http\Controllers\AboutAdminController::class, 'from_add'])->name('adminpage.about.from_add');
Route::post('/admin/about/add', [App\Http\Controllers\AboutAdminController::class, 'add'])->name('adminpage.about.add');

Route::get('/admin/contect', [App\Http\Controllers\ContectAdminController::class, 'index'])->name('adminpage.contect.admincontect');
Route::get('/admin/contect/from', [App\Http\Controllers\ContectAdminController::class, 'from_add'])->name('adminpage.contect.from_add');
Route::post('/admin/contect/add', [App\Http\Controllers\ContectAdminController::class, 'add'])->name('adminpage.contect.add');

Route::get('/admin/background', [App\Http\Controllers\BackgroundController::class, 'index'])->name('adminpage.background.adminbackground');
Route::get('/admin/background/from', [App\Http\Controllers\FromBackgroundAdminController::class, 'index'])->name('adminpage.background.from');
Route::get('/admin/background/edit', [App\Http\Controllers\EditBackgroundAdminController::class, 'index'])->name('adminpage.background.edit');


//End Admin//

// ลองให้ฟลุ็คดึงมาใหม่

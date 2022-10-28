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
 Route::view('/login', 'auth.login')->name('promotepage.login');

//End Promote//

Auth::routes();




//Start Admin//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('adminpage.adminhome');

Route::get('/admin/user', [App\Http\Controllers\UserController::class, 'index'])->name('adminpage.user.adminuser');
Route::get('/admin/user/edit', [App\Http\Controllers\EditUserAdminController::class, 'index'])->name('adminpage.user.edit');
Route::get('/admin/user/from', [App\Http\Controllers\FromUserAdminController::class, 'index'])->name('adminpage.user.from');

Route::get('/admin/type-product', [App\Http\Controllers\TypeProductController::class, 'index'])->name('adminpage.type-product.adminproduct');
Route::get('/admin/type-product/edit', [App\Http\Controllers\EditTypeProductAdminController::class, 'index'])->name('adminpage.type-product.edit');
Route::get('/admin/type-product/from', [App\Http\Controllers\FromTypeProductAdminController::class, 'index'])->name('adminpage.type-product.from');


Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'index'])->name('adminpage.product.adminproduct');
Route::get('/admin/product/edit', [App\Http\Controllers\EditProductAdminController::class, 'index'])->name('adminpage.product.edit');
Route::get('/admin/product/from', [App\Http\Controllers\FromProductAdminController::class, 'index'])->name('adminpage.product.from');

Route::get('/admin/about', [App\Http\Controllers\AboutAdminController::class, 'index'])->name('adminpage.about.adminabout');
Route::get('/admin/about/edit', [App\Http\Controllers\EditAboutAdminController::class, 'index'])->name('adminpage.about.edit');
Route::get('/admin/about/from', [App\Http\Controllers\FromAboutAdminController::class, 'index'])->name('adminpage.about.from');

Route::get('/admin/menu', [App\Http\Controllers\MenuAdminController::class, 'index'])->name('adminpage.menu.adminmenu');
Route::get('/admin/menu/edit', [App\Http\Controllers\EditMenuAdminController::class, 'index'])->name('adminpage.menu.edit');
Route::get('/admin/menu/from', [App\Http\Controllers\FromMenuAdminController::class, 'index'])->name('adminpage.menu.from');

Route::get('/admin/contect', [App\Http\Controllers\ContectAdminController::class, 'index'])->name('adminpage.contect.admincontect');
Route::get('/admin/contect/from', [App\Http\Controllers\FromContectAdminController::class, 'index'])->name('adminpage.contect.from');
Route::get('/admin/contect/edit', [App\Http\Controllers\EditContectAdminController::class, 'index'])->name('adminpage.contect.edit');

Route::get('/admin/background', [App\Http\Controllers\BackgroundController::class, 'index'])->name('adminpage.background.adminbackground');
Route::get('/admin/background/from', [App\Http\Controllers\FromBackgroundAdminController::class, 'index'])->name('adminpage.background.from');
Route::get('/admin/background/edit', [App\Http\Controllers\EditBackgroundAdminController::class, 'index'])->name('adminpage.background.edit');


//End Admin//

// ลองให้ฟลุ็คดึงมาใหม่

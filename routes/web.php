<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
//  Route::view('/', 'promotepage.home')->name('promotepage.home');
//  Route::view('/about', 'promotepage.about')->name('promotepage.about');
//  Route::view('/menu', 'promotepage.menu')->name('promotepage.menu');
//  Route::view('/hot', 'promotepage.hot')->name('promotepage.hot');
//  Route::view('/contract', 'promotepage.contract')->name('promotepage.contract');
//  Route::view('/info', 'promotepage.info')->name('promotepage.info');

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('promotepage.home');
Route::get('/about', [App\Http\Controllers\IndexController::class, 'about'])->name('promotepage.about');
Route::get('/menu', [App\Http\Controllers\IndexController::class, 'menu'])->name('promotepage.menu');
Route::get('/contract', [App\Http\Controllers\IndexController::class, 'contract'])->name('promotepage.contract');
Route::get('/info', [App\Http\Controllers\IndexController::class, 'info'])->name('promotepage.info');
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
Route::get('/admin/type-product/edit/{id}', [App\Http\Controllers\TypeProductController::class, 'edit'])->name('adminpage.type-product.edit');
Route::post('/admin/type-product/update/{id}', [App\Http\Controllers\TypeProductController::class, 'update'])->name('adminpage.type-product.update');
Route::get('/admin/type-product/delete/{id}', [App\Http\Controllers\TypeProductController::class, 'delete'])->name('adminpage.type-product.delete');

Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'index'])->name('adminpage.product.adminproduct');
Route::get('/admin/product/from', [App\Http\Controllers\ProductController::class, 'from_add'])->name('adminpage.product.from_add');
Route::post('/admin/product/add', [App\Http\Controllers\ProductController::class, 'add'])->name('adminpage.product.add');
Route::get('/admin/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('adminpage.product.edit');
Route::post('/admin/product/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('adminpage.product.update');
Route::get('/admin/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('adminpage.product.delete');

Route::get('/admin/about', [App\Http\Controllers\AboutAdminController::class, 'index'])->name('adminpage.about.adminabout');
Route::get('/admin/about/from', [App\Http\Controllers\AboutAdminController::class, 'from_add'])->name('adminpage.about.from_add');
Route::post('/admin/about/add', [App\Http\Controllers\AboutAdminController::class, 'add'])->name('adminpage.about.add');
Route::get('/admin/about/edit/{id}', [App\Http\Controllers\AboutAdminController::class, 'edit'])->name('adminpage.about.edit');
Route::post('/admin/about/update/{id}', [App\Http\Controllers\AboutAdminController::class, 'update'])->name('adminpage.about.update');
Route::get('/admin/about/delete/{id}', [App\Http\Controllers\AboutAdminController::class, 'delete'])->name('adminpage.about.delete');

Route::get('/admin/contect', [App\Http\Controllers\ContectAdminController::class, 'index'])->name('adminpage.contect.admincontect');
Route::get('/admin/contect/from', [App\Http\Controllers\ContectAdminController::class, 'from_add'])->name('adminpage.contect.from_add');
Route::post('/admin/contect/add', [App\Http\Controllers\ContectAdminController::class, 'add'])->name('adminpage.contect.add');
Route::get('/admin/contect/edit/{id}', [App\Http\Controllers\ContectAdminController::class, 'edit'])->name('adminpage.contect.edit');
Route::post('/admin/contect/update/{id}', [App\Http\Controllers\ContectAdminController::class, 'update'])->name('adminpage.contect.update');
Route::get('/admin/contect/delete/{id}', [App\Http\Controllers\ContectAdminController::class, 'delete'])->name('adminpage.contect.delete');

Route::get('/admin/background', [App\Http\Controllers\BackgroundController::class, 'index'])->name('adminpage.background.adminbackground');
Route::get('/admin/background/from', [App\Http\Controllers\BackgroundController::class, 'from_add'])->name('adminpage.background.from_add');
Route::post('/admin/background/add', [App\Http\Controllers\BackgroundController::class, 'add'])->name('adminpage.background.add');
Route::get('/admin/background/edit/{id}', [App\Http\Controllers\BackgroundController::class, 'edit'])->name('adminpage.background.edit');
Route::post('/admin/background/update/{id}', [App\Http\Controllers\BackgroundController::class, 'update'])->name('adminpage.background.update');
Route::get('/admin/background/delete/{id}', [App\Http\Controllers\BackgroundController::class, 'delete'])->name('adminpage.background.delete');


//End Admin//


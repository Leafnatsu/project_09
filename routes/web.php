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
 Route::view('/contract', 'promotepage.contract')->name('promotepage.contract');
 Route::view('/info', 'promotepage.info')->name('promotepage.info');
 Route::view('/login', 'auth.login')->name('promotepage.login');

//End Promote//

Auth::routes();




//Start Admin//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('adminpage.adminhome');


Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'index'])->name('adminpage.product.adminproduct');

Route::get('/admin/product/from', [App\Http\Controllers\FromProductAdminController::class, 'index'])->name('adminpage.product.from');

Route::get('/admin/about', [App\Http\Controllers\AboutAdminController::class, 'index'])->name('adminpage.about.adminabout');

Route::get('/admin/about/from', [App\Http\Controllers\FromAboutAdminController::class, 'index'])->name('adminpage.about.from');

Route::get('/admin/menu', [App\Http\Controllers\MenuAdminController::class, 'index'])->name('adminpage.menu.adminmenu');

Route::view('/admin/menu/from', 'adminpage.menu.from-admin-menu')->name('adminpage.menu.from');

Route::get('/admin/contect', [App\Http\Controllers\ContectAdminController::class, 'index'])->name('adminpage.contect.admincontect');

Route::get('/admin/contect/from', [App\Http\Controllers\FromContectAdminController::class, 'index'])->name('adminpage.contect.from');



//End Admin//



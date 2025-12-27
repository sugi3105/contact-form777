<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

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

//Route::get('/', function () {
    //return 'root ok';
Route::get('/', [ContactController::class, 'index'])
   ->name('contact.index');
Route::post('contact/confirm', [ContactController::class, 'confirm'])
   ->name('contact.confirm');
Route::post('contact/thanks', [ContactController::class, 'thanks'])
   ->name('contact.thanks');
Route::get('/admin', [AdminController::class, 'index'])
   ->name('admin.index');
Route::get('admin/search', [AdminController::class, 'search'])
   ->name('admin.search');
Route::post('admin/delete', [AdminController::class, 'destroy'])
   ->name('admin.delete');
Route::get('admin/export', [AdminController::class, 'export'])
   ->name('admin.export');
   //});

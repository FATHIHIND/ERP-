<?php
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();
Route::get('profiles','UserControllers@profiles')->name('profiles')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::post('profiles','UserControllers@modifieravatar')->name('profiles');
Route::get('profiles','UserControllers@DetailAvatar')->name('profiles');

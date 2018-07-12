<?php

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

Route::get('/', function ()
{
    return view('login');
});

Route::get('/signup', function ()
{
	return view('signup');
});

Route::get('/AM-dashboard', function ()
{
	return view('dashboard');
});


Route::post('/am/form-pelanggan/insert','AMController@insertPelanggan');
// Route::get('/admin-jadwal','AdminController@indexJadwal');
// Route::get('/admin/jadwal/update/{id}', 'AdminController@updateJadwal');
// Route::get('/admin/jadwal/delete/{id}', 'AdminController@deleteJadwal');

<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('/supplies', 'SupplyMainController');
Route::get('/', 'PagesController@index');
Route::get('supplies', 'SupplyMainController@index');
Route::get('/supplies-create', 'SupplyMainController@create');
Route::post('/supplies-store', 'SupplyMainController@store');
Route::get('/supplies-edit/{stock_no}', 'SupplyMainController@edit');
Route::put('/supplies/{stock_no}', 'SupplyMainController@update');
Route::get('/supplies-delete/{stock_no}', 'SupplyMainController@delete');
Route::get('/search', [SearchController::class, 'search'])->name('search');

Route::get('/supplies-delivered', 'SupplyMainController@delivered');
Route::get('/supplies-delivered-create', 'DeliveredController@create');
Route::post('/supplies-delivered-create', 'DeliveredController@store');



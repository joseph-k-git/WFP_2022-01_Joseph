<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/medicine', 'MedicineController');

Route::resource('/category', 'CategoryController');

Route::resource('/supplier', 'SupplierController');

Route::resource('/transaction', 'TransactionController');

Route::get('/coba1', 'MedicineController@coba1');

Route::get('/report/listmedicine/{id}', 'CategoryController@showlist')->name('reportShowMedicine');

Route::get('/report/highestprices', 'CategoryController@highest_price_per_category')->name('reportHighestPricePerCategory');

Route::post('/medicine/showInfo', 'MedicineController@showInfo')->name('medicine.showInfo');

Route::post('/transaction/showDataAjax', 'TransactionController@showAjax')->name('transaction.showAjax');

Route::post('/supplier/getEditFormA', 'SupplierController@getEditFormA')->name('supplier.getEditFormA');

Route::post('/supplier/getEditFormB', 'SupplierController@getEditFormB')->name('supplier.getEditFormB');

Route::post('/supplier/saveData', 'SupplierController@saveData')->name('supplier.saveData');

Route::post('/supplier/deleteData', 'SupplierController@deleteData')->name('supplier.deleteData');

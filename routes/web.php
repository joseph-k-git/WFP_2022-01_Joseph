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

Route::get('/', 'MedicineController@front_index');

Route::get('/add-to-cart/{id}','MedicineController@addToCart');

Route::middleware(['auth'])->group(function() {

    Route::get('/checkout','MedicineController@checkout');
    
    Route::get('/submit_checkout','TransactionController@submit_front')->name('submitcheckout');

});

Route::resource('/medicine', 'MedicineController')->middleware('auth');

Route::resource('/category', 'CategoryController');

Route::resource('/supplier', 'SupplierController')->middleware('auth');

Route::resource('/transaction', 'TransactionController');

Route::get('/coba1', 'MedicineController@coba1')->middleware('auth');

Route::get('/report/listmedicine/{id}', 'CategoryController@showlist')->name('reportShowMedicine');

Route::get('/report/highestprices', 'CategoryController@highest_price_per_category')->name('reportHighestPricePerCategory');

Route::middleware(['auth'])->group(function() {

    Route::post('/medicine/showInfo', 'MedicineController@showInfo')->name('medicine.showInfo');
    
    Route::post('/medicine/getEditFormA', 'MedicineController@getEditFormA')->name('medicine.getEditFormA');
    
    Route::post('/medicine/getEditFormB', 'MedicineController@getEditFormB')->name('medicine.getEditFormB');
    
    Route::post('/medicine/saveData', 'MedicineController@saveData')->name('medicine.saveData');
    
    Route::post('/medicine/deleteData', 'MedicineController@deleteData')->name('medicine.deleteData');
    
    Route::post('/transaction/showDataAjax', 'TransactionController@showAjax')->name('transaction.showAjax');

});

Route::middleware(['auth'])->group(function() {

    Route::post('/supplier/getEditFormA', 'SupplierController@getEditFormA')->name('supplier.getEditFormA');
    
    Route::post('/supplier/getEditFormB', 'SupplierController@getEditFormB')->name('supplier.getEditFormB');
    
    Route::post('/supplier/saveData', 'SupplierController@saveData')->name('supplier.saveData');
    
    Route::post('/supplier/deleteData', 'SupplierController@deleteData')->name('supplier.deleteData');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

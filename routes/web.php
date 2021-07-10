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
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Auth::routes();

Route::get('/', 'DashboardController@index')->name('home');
Route::get('/statistik', 'StatistikController@index')->name('statistik');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/reset', 'HomeController@reset')->name('reset');
Route::get('/update_gambar', 'HomeController@update_gambar')->name('update_gambar');
Route::patch('edit_gambar/{id}','HomeController@edit_gambar');
Route::get('tracking', 'TrackingController@index')->name('tracking');
Route::get('tracking-detail', 'TrackingController@tracking')->name('detail-tracking');

Route::namespace('Admin')
    ->middleware(['auth'])
    ->group(function() {

        Route::resource('data-asset', 'AsetController');
        Route::resource('penyusutan-asset', 'PenyusutanController');
        // Route::get('/asset/{id}/edit','AsetController@edit');


        Route::resource('pustaka-kategori-aset', 'KategoriController');
        Route::resource('pustaka-lokasi-aset', 'LokasiController');

        Route::get('laporan/data-aset','LaporanController@data_aset')->name('laporan-data-aset');
        Route::get('download-penyusutan', 'CreatePdfController@penyusutan' )->name('download-penyusutan');
        Route::get('download-pdf/{id}', 'CreatePdfController@detail' )->name('download-detail-pdf');
        Route::get('download-pdf', 'CreatePdfController@pdfForm' )->name('download-pdf');
        
        Route::get('download-qrcode', 'CreatePdfController@qrCode' )->name('download-qrcode');
        
        //transfer
	    Route::get('transfer-aset/{id}','TransferController@index')->name('transfer-aset');
        Route::patch('transfer-aset/update/{id}', 'TransferController@store');
        // Import
        Route::post('/import', 'AsetController@import')->name('aset.import');


        Route::resource('pengaturan/satuan-kerja', 'SatuankerjaController');
        Route::get('pengaturan/management-user', 'RoleController@index');
        Route::get('pengaturan/create-user', 'RoleController@create');
        Route::post('pengaturan/create-user/tambah-user', 'RoleController@store');
        Route::get('pengaturan/edit/{id}', 'RoleController@edit');
        Route::patch('pengaturan/update/{id}', 'RoleController@update');
        Route::delete('pengaturan/management/{id}', 'RoleController@destroy');

    });
Auth::routes(['verify' => true]);


Route::group(['prefix' => 'error'], function(){
    Route::get('404', function () { return view('pages.error.404'); });
    Route::get('500', function () { return view('pages.error.500'); });
});

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// 404 for undefined routes
Route::any('/{page?}',function(){
    return view('pages.error.404');
})->where('page','.*');

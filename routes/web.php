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
Route::resource('Obat','ObatController'); //
Route::resource('Product','ProductController');
Route::resource('Products','ProductController');

// Route::resource('Products','CategoryController');
Route::resource('Categories','CategoryController');
// Route::post('/products/showInfo','ObatController@showInfo')->name('products.showInfo');
Route::post('/products/showInfo','ObatController@showInfo')->name('Product.products.showInfo');






Route::get('/my', function () {
    return view('biodata',['nrp'=> '160419107',
    'nama'=>'Margareta Yubella', 
    'asal'=>'Kediri','hobby'=>'Motoran']);
});
Route::get('/myfriend/{nrp}', function ($nrp) {
    return view('biodata',['nrp'=> $nrp]);
   
});
// --Responsi--
// Route::get('/myfriend/{nrp?}', function ($nrp='160419107') {
//    echo $nrp;
   
// });
Route::get('/myfriend/{nrp?}', function ($nrp= null) {
    if($nrp == null){
        return view('biodata');
    }
    return view('biodata' ,compact('nrp'));
    // return view('nrp',['nrp'=>$nrp]);
});
// -------------

// --Exercise Week 2--
// Route::get('/catalog', function () {
//     return view('catalog',['cataloglist'=>[
//         [
//             'catalog_id' => 1,
//             'catalog_name'=> 'Medicines',
//             'catalog_slug'=>'medicines'
//         ],
//         [
//             'catalog_id' => 2,
//             'catalog_name'=> 'Medical Quipment',
//             'catalog_slug'=>'med_quip'
//         ]
//     ]]);
// });


// Route::get('/myfriend', function () {
//     return view('biodata');
// });

// Route::get('/coba', function () {
//     return view('biodata');
// });

// Route::get('/myfriend', function () {
//     return view('welcome',['nrp'=> '160419107','nama'=>'Margareta Yubella', 'asal'=>'Kediri','hobby'=>'']);
// });

Route::get('/greeting', function () {
    return view('welcome',['name'=> '']);
});

// Route::get('/margareta', function () {
//     return view('welcome');
// });


// Buat base url hanya diakses dengan POST
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user', function () {
//     return view('user');
// });

Route::resource('User','UserController');
Route::resource('Role','RoleController');
Route::resource('Transaction','TransactionController');
Route::post('Transaction/showDataAjax/','TransactionController@showAjax')->name('Transaction.showAjax');
Route::post('Transaction/showmodal','TransactionController@showAjax')->name('Transaction.showModal');


Route::resource('Buyers','BuyerController');
Route::resource('Category','CategoryController');
Route::get('Product_Transaction','ObatController@produk_trans');
Route::post('Product_Transaction','ObatController@simpan_produk_trans')->name('simpan_produk_transaksi');









// php artisan route:list
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


// Route::get('/myfriend', function () {
//     return view('biodata');
// });

Route::get('/coba', function () {
    return view('biodata');
});

// Route::get('/myfriend', function () {
//     return view('welcome',['nrp'=> '160419107','nama'=>'Margareta Yubella', 'asal'=>'Kediri','hobby'=>'']);
// });

Route::get('/greeting', function () {
    return view('welcome',['name'=> '']);
});

// Route::get('/margareta', function () {
//     return view('welcome');
// });

// Route::get('/Margareta', function () {
//     return view('welcome');
// });

// Buat base url hanya diakses dengan POST
// Route::post('/', function () {
//     return view('welcome');
// });


// php artisan route:list
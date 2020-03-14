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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
});
Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/english song', function () {
    return view('english song');
});
Route::get('/kenshi', function () {
    return view('kenshi');
});
Route::get('/lisa', function () {
    return view('lisa');
});
Route::get('/list', function () {
    return view('list');
});
Route::get('/receive', function () {
    return view('receive');
});
Route::get('/Avicii', function () {
    return view('Avicii');
});

Route::get('/Ed Sheeran', function () {
    return view('Ed Sheeran');
});

Route::get('/Carly', function () {
    return view('Carly');
});

Route::get('/Zedd', function () {
    return view('Zedd');
});

Route::get('/LMFAOVEVO', function () {
    return view('LMFAOVEVO');
});

Route::get('/Chainsmokers', function () {
    return view('Chainsmokers');
});

Route::get('/lisa music', function () {
    return view('lisa music');
});

Route::get('/kenshi music', function () {
    return view('kenshi music');
});

Route::get('/unlasting', function () {
    return view('unlasting');
});
Route::get('/adamas', function () {
    return view('adamas');
});
Route::get('/gurenge', function () {
    return view('gurenge');
});
Route::get('/lemon', function () {
    return view('lemon');
});
Route::get('/loser', function () {
    return view('loser');
});
Route::get('/orion', function () {
    return view('orion');
});


Route::get('/addProduct',[
    'uses'=>'ProductController@create',
    'as'=>'product'
]);

Route::post('/addProduct/store',[
    'uses'=>'ProductController@store',
    'as'=>'addProduct.store'
]);

Route::get('/viewproduct',[
    'uses'=>'ProductController@view',
    'as'=>'view.product'
]);




Route::get('/viewproduct/delete/{id}', [
    'uses'=>'ProductController@delete',
    'as' => 'viewproduct.delete'
]);

Route::get('/viewlist',[
    'uses'=>'ProductController@viewlist',
    'as'=>'view.list'
]);

Route::get('/productdetail/{id}', [
    'uses'=>'ProductController@detail',
    'as' => 'product.detail'
]);

Route::post('/viewlist', [
    'uses'=>'ProductController@search',
    'as' => 'search.product'
]);

Route::get('editproduct/{id}', [
    'uses'=>'ProductController@edit',
    'as' => 'edit.product'
]);

Route::post('updateproduct', [
    'uses'=>'ProductController@update',
    'as' => 'update.product'
]);
//process payment
//Route::post('paypal','PaymentController@payWithpaypal');

//check status
//Route::get('status','PaymentController@getPaymentStatus');

// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

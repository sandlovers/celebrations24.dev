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
    return view('home');
});


Route::get('/products', function () {
    return view('products');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/tempaswedding', function () {
    return view('home');
});

Route::get('/tempasbartender', function () {
    return view('tempasbartender');
});

Route::get('/bestofficiants', function () {
    return view('bestofficiants');
});

Route::get('/customdancefloor', function () {
    return view('customdancefloor');
});

Route::get('/ourreviews', function () {
    return view('ourreviews');
});

Route::get('/danceoncloud', function () {
    return view('danceoncloud');
});

Route::get('/personalslideshow', function () {
    return view('personalslideshow');
});

Route::get('/exclusivespecials', function () {
    return view('exclusivespecials');
});

Route::get('/whatiscost', function () {
    return view('whatiscost');
});

Route::get('/contactowner', function () {
    return view('contactowner');
});

Route::get('/downloadapp', function () {
    return view('downloadapp');
});

Route::get('/makepayment', function () {
    return view('makepayment');
});

Route::get('/bestdgsandmcs', function () {
    return view('bestdgsandmcs');
});

Route::get('/tampaslighting', function () {
    return view('tampaslighting');
});

Route::get('/tampasbestbooths', function () {
    return view('tampasbestbooths');
});

Route::get('/tampasbestphotographers', function () {
    return view('tampasbestphotographers');
});

Route::get('/tampasbestvideographers', function () {
    return view('tampasbestvideographers');
});

Route::get('/bestmusicians-magician', function () {
    return view('bestmusicians-magician');
});

Route::get('/booknow', function () {
    return view('booknow');
});

Route::post('/addproduct', 'ApiCartController@addItem');
Route::post('/removeproduct', 'ApiCartController@removeItem');
Route::get('/getproducts', 'ApiCartController@getProductsFromStripe');
Route::get('/getcartitems', 'ApiCartController@getItemsInCart');
Route::get('/getitemcount', 'ApiCartController@getItemCount');
Route::get('/getcarttotal', 'ApiCartController@getCartTotal');
Route::post('/charge', 'ApiCartController@purchase');


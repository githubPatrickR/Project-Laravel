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

Route::get('/', function(){
    return view('index');
})->name('index');

Route::get('/signup', [
    'uses' => 'UserController@getSignup',
    'as' => 'user.signup',
    'middleware' => 'guest',
]);

Route::post('/signup',[
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup',
    'middleware' => 'guest',
]);

Route::get('/signin', [
    'uses' => 'UserController@getSignin',
    'as' => 'user.signin',
//    'middleware' => 'guest',
]);

Route::post('/signin',[
    'uses' => 'UserController@postSignin',
    'as' => 'user.signin',
//    'middleware' => 'guest',
]);

Route::get('/profile', [
    'uses' => 'UserController@getProfile',
    'as' => 'user.profile',
    'middleware' => 'auth',
]);

Route::get('/logout',[
    'uses' => 'UserController@getLogout',
    'as' => 'user.logout',
]);

Route::get('/productIndex',[
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index',
    'middleware' => 'auth',
]);

route::get('/add-to-user/{productId}',[
    'uses' => 'ProductController@getAddToUser',
    'as' => 'product.addToUser',
]);


route::get('/remove-from-user/{productId}',[
    'uses' => 'ProductController@getRemoveFromUser',
    'as' => 'product.removeFromUser',
]);


//routes for Product Management
Route::get('/productManagement',[
    'uses' => 'ProductController@getProductManagement',
    'as' => 'product.productManagement',
]);

Route::get('/productDelete/{productId}',[
    'uses' => 'ProductController@productDelete',
    'as' => 'product.managementDelete',
]);

Route::get('/addNewProduct',[
    'uses' => 'ProductController@getAddNewProduct',
    'as' => 'product.addNewProduct',
]);


Route::post('/addNewProduct',[
    'uses' => 'ProductController@postAddNewProduct',
    'as' => 'product.addNewProduct',
]);


Route::get('/updateProduct/{productId}',[
    'uses' => 'ProductController@getUpdateProduct',
    'as' => 'product.updateProduct',
]);


Route::post('/updateProduct',[
    'uses' => 'ProductController@postUpdateProduct',
    'as' => 'product.postUpdateProduct',
]);

Route::get('/uploadImage',[
    'uses' => 'ProductController@getUploadImage',
    'as' => 'product.uploadImage',
]);

Route::post('/uploadImage',[
    'uses' => 'ProductController@postUploadImage',
    'as' => 'product.uploadImage',
]);

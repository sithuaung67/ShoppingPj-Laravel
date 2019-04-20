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
Route::get('/mi9',[
    'uses'=>'HomeController@getMi9',
    'as'=>'mi9'
]);
Route::get('/mi9Global',[
    'uses'=>'HomeController@getMi9Global',
    'as'=>'mi9Global'
]);
Route::get('/Mix3BannerPc',[
    'uses'=>'HomeController@getMix3BannerPc',
    'as'=>'Mix3BannerPc'
]);
Route::get('/PcBanner1920',[
    'uses'=>'HomeController@getPcBanner1920',
    'as'=>'PcBanner1920'
]);
Route::get('/xiaomi9',[
    'uses'=>'HomeController@getXiaomi9',
    'as'=>'xiaomi9'
]);
Route::get('/MiPhone',[
    'uses'=>'HomeController@getMiPhone',
    'as'=>'MiPhone'
]);
Route::post('/checkout',[
   'uses'=>'HomeController@postCheckout',
    'as'=>'post.checkout'
]);

Route::get('/add/card/{id}',[
   'uses'=>'HomeController@getAddCart',
    'as'=>'add.cart'
]);
Route::get('/decrease/cart/{id}',[
   'uses'=>'HomeController@decreaseCart',
    'as'=>'decrease.cart'
]);
Route::get('/cancel/cart',[
   'uses'=>'HomeController@getCancelCart',
    'as'=>'cancel.cart'
]);
Route::get('/increase/cart/{id}',[
    'uses'=>'HomeController@increaseCart',
    'as'=>'increase.cart'
]);
Route::get('/shopping/cart',[
   'uses' =>'HomeController@getCart',
    'as'=>'cart.show'
]);
Route::get('/search',[
   'uses'=>'HomeController@getSearch',
    'as'=>'search.product'
]);
Route::get('/',[
    'uses'=>'HomeController@getWelcome',
    'as'=>'/'
]);
Route::get('/front-product-image/{img_name}',[
    'uses'=>'HomeController@getProductImage',
    'as'=>'front.product.image'
]);
Route::post('/contact-message',[
    'uses'=>'HomeController@postMessage',
    'as'=>'post.message'
]);
Route::get('/product-category/{id}',[
   'uses'=>'HomeController@getProductCategory',
    'as'=>'product.cat'
]);


Auth::routes(['verify'=>true]);

Route::group(['middleware'=>'verified'],function (){

    Route::get('/orders',[
       'uses'=>'OrderController@getOrders',
        'as'=>'orders'
    ]);
    Route::get('/print/{id}',[
       'uses'=>'OrderController@getPrint',
        'as'=>'print'
    ]);
    Route::post('/products/update',[
        'uses'=>'ProductController@postUpdateProduct',
        'as'=>'update.product'
    ]);
    Route::get('/products/{id}/edit',[
        'uses'=>'ProductController@getEditProduct',
        'as'=>'product.edit'
    ]);
    Route::post('/products/edit',[
        'uses'=>'ProductController@postEditProduct',
        'as'=>'edit.product'
    ]);
    Route::get('/products/delete',[
        'uses'=>'ProductController@getDeleteProduct',
        'as'=>'delete.product'
    ]);
    Route::get('/products/image/{img_name}',[
        'uses'=>'ProductController@getProductImage',
        'as'=>'product.image'
        ]);
    Route::post('/products,new',[
        'uses'=>'ProductController@postNewProduct',
        'as'=>'new.product'
    ]);
    Route::get('/products',[
       'uses'=>'ProductController@getProduct',
        'as'=>'product'
    ]);

    Route::post('/category/update',[
       'uses'=>'ProductController@postUpdateCategory',
        'as'=>'update.category'
    ]);

    Route::get('/home',[
        'uses'=>'HomeController@index',
        'as'=>'home'
    ]);

    Route::get('/categories',[
        'uses'=>'ProductController@getCategory',
        'as'=>'categories'
    ]);
    Route::post('/category/new',[
        'uses'=>'ProductController@postNewCategory',
        'as'=>'new.category'
    ]);
    Route::get('/category/remove/{id}',[
        'uses'=>'ProductController@getRemoveCategory',
        'as'=>'remove.category'
    ]);
});

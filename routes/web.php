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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

// Route::get('/', function () {
//     return view('home');
// });
// ============= START ALL FRONTENDCONTROLLER ROUTE  ================
Route::get('/', [
    'uses'		=> 'FrontendController@index',
    'as'		=> 'home'
]);

Route::get('/all-category-show', [
    'uses'		=> 'FrontendController@allCategoryShow',
    'as'		=> 'all-category-show'
]);

Route::get('/about', [
    'uses'		=> 'FrontendController@showAboutPage',
    'as'		=> 'about'
]);

Route::get('/contact', [
    'uses'		=> 'FrontendController@showContactPage',
    'as'		=> 'contact'
]);

Route::get('/services', [
    'uses'		=> 'FrontendController@showServicesPage',
    'as'		=> 'services'
]);

Route::post('/store-contact', [
    'uses'		=> 'FrontendController@storeContactInfo',
    'as'		=> 'store-contact'
]);
// ============= END ALL FRONTENDCONTROLLER ROUTE  ================



Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// ============= START ALL CATEGORY ROUTE  ================
    Route::get('/admin/category', [
         'middleware'=>'auth',
        'uses'		=> 'Admin\CategoryController@all_category',
        'as'		=> 'all-category'
    ]);

    Route::get('/admin/add-category', [
         'middleware'=>'auth',
        'uses'		=> 'Admin\CategoryController@add_category',
        'as'		=> 'add-category'
    ]);
    Route::post('/admin/save-category', [
         'middleware'=>'auth',
        'uses'		=> 'Admin\CategoryController@save_category',
        'as'		=> 'save-category'
    ]);

    Route::get('/admin/edit-category/{id}', [
         'middleware'=>'auth',
        'uses'		=> 'Admin\CategoryController@edit_category',
        'as'		=> 'edit-category'
    ]);
    Route::post('/admin/update-user/{id}', [
         'middleware'=>'auth',
        'uses'		=> 'Admin\CategoryController@update_category',
        'as'		=> 'update-category'
    ]);
    Route::get('/admin/delete-category/{id}', [
         'middleware'=>'auth',
        'uses'		=> 'Admin\CategoryController@delete_category',
        'as'		=> 'delete-category'
    ]);
// =============== END ALL CATEGORY ROUTE  ==================

// <=================== START ALL PORTFOLIO ROUTE  =============
    Route::get('/portfolio', [
        'uses'		=> 'PortfolioController@index',
        'as'		=> 'portfolio'
    ]);
    Route::get('/portfolio-details', [
        'uses'		=> 'PortfolioController@portfolioDetails',
        'as'		=> 'portfolio-details'
    ]);
// ================ END ALL PORTFOLIO ROUTE  ============


// ================= START ALL BLOG ROUTE  =================
Route::get('/blog', [
    'uses'		=> 'BlogController@index',
    'as'		=> 'blog'
]);

Route::get('/blog-details', [
    'uses'		=> 'BlogController@blogDetails',
    'as'		=> 'blog-details'
]);
// ================ END ALL BLOG ROUTE  ====================

// ================ START ALL SUBSCRIBER ROUTE  ==============
Route::post('/store-subscriber', [
    'uses'		=> 'AdminDashboardController@store_subscriber',
    'as'		=> 'store-subscriber'
]);

Route::get('/all-subscriber', [
    'uses'		=> 'AdminDashboardController@all_subscriber',
    'as'		=> 'all-subscriber'
]);

Route::get('/delete-subscriber/{id}', [
   'uses'		=> 'AdminDashboardController@delete_subscriber',
   'as'		=> 'delete-subscriber'
]);
// =============== END ALL SUBSCRIBER ROUTE  ==============




//  ====== START ALL USER ROUTE HERE ============
Route::get('/add-sub-category', [
    'middleware'=>'auth',
    'uses'		=> 'Admin\SubCategoryController@add_sub_category',
    'as'		=> 'add-sub-category'
]);

Route::post('/save-sub-category', [
    'middleware'=>'auth',
    'uses'		=> 'Admin\SubCategoryController@store_sub_category',
    'as'		=> 'save-sub-category'
]);
Route::get('/all-sub-category', [
    'middleware'=>'auth',
    'uses'		=> 'Admin\SubCategoryController@all_sub_category',
    'as'		=> 'all-sub-category'
]);
Route::get('/edit-sub-category/{id}', [
    'middleware'=>'auth',
    'uses'		=> 'Admin\SubCategoryController@edit_sub_category',
    'as'		=> 'edit-sub-category'
]);
Route::post('/update-sub-category/{id}', [
    'middleware'=>'auth',
    'uses'		=> 'Admin\SubCategoryController@update_sub_category',
    'as'		=> 'update-sub-category'
]);
Route::get('/delete-sub-category/{id}', [
    'middleware'=>'auth',
    'uses'		=> 'Admin\SubCategoryController@delete_sub_category',
    'as'		=> 'delete-sub-category'
]);
//  ============= END ALL USER ROUTE HERE ==============
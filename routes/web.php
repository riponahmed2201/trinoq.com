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

Route::get('/', [
    'uses'		=> 'FrontendController@index',
    'as'		=> 'home'
]);


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// =================== START ALL CATEGORY ROUTE  ==========================
    Route::get('/admin/category', [
        'uses'		=> 'Admin\CategoryController@all_category',
        'as'		=> 'all-category'
    ]);

    Route::get('/admin/add-category', [
        'uses'		=> 'Admin\CategoryController@add_category',
        'as'		=> 'add-category'
    ]);
    Route::post('/admin/save-category', [
        'uses'		=> 'Admin\CategoryController@save_category',
        'as'		=> 'save-category'
    ]);

    Route::get('/admin/edit-category/{id}', [
        'uses'		=> 'Admin\CategoryController@edit_category',
        'as'		=> 'edit-category'
    ]);
    Route::post('/admin/update-user/{id}', [
        'uses'		=> 'Admin\CategoryController@update_category',
        'as'		=> 'update-category'
    ]);
    Route::get('/admin/delete-category/{id}', [
        'uses'		=> 'Admin\CategoryController@delete_category',
        'as'		=> 'delete-category'
    ]);
// =================== END ALL CATEGORY ROUTE  =====================

// <=================== START ALL PORTFOLIO ROUTE  =====================>
    Route::get('/portfolio', [
        'uses'		=> 'PortfolioController@index',
        'as'		=> 'portfolio'
    ]);
// <=================== END ALL PORTFOLIO ROUTE  =====================>


// <=================== START ALL BLOG ROUTE  =====================>
Route::get('/blog', [
    'uses'		=> 'BlogController@index',
    'as'		=> 'blog'
]);
// <=================== END ALL BLOG ROUTE  =====================>

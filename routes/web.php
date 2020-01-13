<?php
Route::get('/', function() {
    return redirect(route('admin.dashboard'));
});

Route::get('home', function() {
    return redirect(route('admin.dashboard'));
});

Route::name('admin.')->prefix('admin')->middleware('auth')->group(function() {
    Route::get('dashboard', 'DashboardController')->name('dashboard');

    Route::get('users/roles', 'UserController@roles')->name('users.roles');
    Route::resource('users', 'UserController', [
        'names' => [
            'index' => 'users'
        ]
    ]);
});

Route::middleware('auth')->get('logout', function() {
    Auth::logout();
    return redirect(route('login'))->withInfo('You have successfully logged out!');
})->name('logout');

Auth::routes(['verify' => true]);

Route::name('js.')->group(function() {
    Route::get('dynamic.js', 'JsController@dynamic')->name('dynamic');
});

// Get authenticated user
Route::get('users/auth', function() {
    return response()->json(['user' => Auth::check() ? Auth::user() : false]);
});

Route::get("/admin/tes", "TesController@index")->name('tes');



// Category
Route::get("/admin/category", "CategoryController@index")->name('category');
Route::get('/admin/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category/store', 'CategoryController@store')->name('category.store');
Route::get('/admincategory/edit/{id}', 'CategoryController@edit')->name('category.edit');
Route::put('/admincategory/update/{id}', 'CategoryController@update')->name('category.update');
Route::get('/admin/category/destroy/{id}', 'CategoryController@destroy')->name('category.destroy');
Route::get('/admin/category/search','CategoryController@ajaxSearch')->middleware('cors')->name('category.ajaxsearch');
Route::get('/admin/category/searchh','CategoryController@search')->name('category.search');






// Product
Route::get("/admin/product", "ProductController@index")->name('product');
Route::get('/admin/product/create', 'ProductController@create')->name('product.create');
Route::post('/admin/product/store', 'ProductController@store')->name('product.store');
Route::get('product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::put('product/update/{id}', 'ProductController@update')->name('product.update');
Route::get('/admin/product/destroy/{id}', 'ProductController@destroy')->name('product.destroy');
Route::get('/admin/product/search','ProductController@search')->name('product.search');

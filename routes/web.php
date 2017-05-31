<?php

Auth::routes();
Route::get('/', 'MainController@index');

Route::get('/session', function () {
    dd(csrf_token());
});

Route::post('/functions_images', 'FunctionsController@index');
Route::post('/functions_image', 'FunctionsController@main_image');
Route::post('/functions_form', 'FunctionsController@form');
Route::post('/functions_form_logo', 'FunctionsController@form_logo');
Route::post('/functions_logo', 'FunctionsController@add_logo');
Route::get('/home', 'HomeController@index');

Route::get('/category/{id}', 'CategoryController@index')->where('id', '[0-9]+');
Route::post('/MainController/ajax_usersessions', 'MainController@ajax_usersessions');

Route::get('/good_added', function () {
    return view('good');
})->name('good_added');

Route::get('/good_added', function () {
    return view('partner');
})->name('partner_added');

Route::get('/not_yours', function () {
    return view('not_yours');
})->name('not_yours');

Route::get('/logout', ['uses' => 'Admin\IndexController@index', 'as' => 'adminIndex']);

//admin
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function () {
    Route::post('/add_clients_group', 'Admin\ClientsController@add_clients_group');
    Route::post('/edit_clients_group', 'Admin\ClientsController@edit_clients_group');
    Route::post('/add_deal', 'Admin\ClientsController@add_deal');
    Route::post('/edit_deal', 'Admin\ClientsController@edit_deal');
    Route::post('/func_edit_activation_clents_group', 'Admin\ClientsController@func_edit_activation_clents_group');
    Route::post('/func_delete_deal', 'Admin\ClientsController@func_delete_deal');
    Route::post('/func_delete_clients_group', 'Admin\ClientsController@func_delete_clients_group');


    Route::get('/test', 'Admin\TestController@index');
    Route::get('/clients_groups', 'Admin\ClientsController@clients_groups')->name('clients_groups');
    Route::get('/deals_names', 'Admin\ClientsController@deals_names')->name('deals_names');


    Route::get('/add_adv_section', 'Admin\AdvController@index');
    Route::post('/add_adv', 'Admin\AdvController@add_adv');

    Route::get('/edit_adv_section/{operation}', 'Admin\AdvController@edit');
    Route::get('/edit_adv/{id}', 'Admin\AdvController@edit_adv');
    Route::post('/update_adv', 'Admin\AdvController@update_adv');


    //admin
    Route::get('/super_admin', 'Admin\SuperAdminIndexController@index')->name('super_admin');
    Route::get('/shop_admin', 'Admin\ShopAdminIndexController@index')->name('shop_admin');
    Route::get('/center_admin', 'Admin\CenterAdminIndexController@index')->name('center_admin');
    Route::get('/', ['uses' => 'Admin\IndexController@index', 'as' => 'adminIndex']);
    Route::post('/func_update_role', 'FunctionsController@role');
    Route::post('/func_delete_user', 'FunctionsController@delete_user');

    Route::get('/add_logos', 'Admin\PertnersController@add_logos');
    Route::get('/del_logos', 'Admin\PertnersController@del_logos');
    Route::get('/categories', 'Admin\CategoriesController@index');
    Route::get('/partners', 'Admin\PertnersController@index');
    Route::get('/add_category', 'Admin\CategoriesController@add_category');
    Route::resource('/customers_managment', 'Admin\CustomersController');
});

Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');

Route::post('/add_comment', 'FunctionsController@addComment')->name('add_comment');
Route::post('/add_question_answer', 'FunctionsController@addQuestion_answer')->name('add_question_answer');
Route::post('/add_question', 'FunctionsController@addQuestion')->name('add_question');
Route::post('/delete_question', 'FunctionsController@deleteQuestion')->name('delete_question');
Route::post('/delete_logotype', 'FunctionsController@deleteLogotype');
Route::post('/delete_comment', 'FunctionsController@deleteComment')->name('delete_comment');
Route::post('/add_category', 'FunctionsController@addCategory')->name('add_category');
Route::post('/update_user_info', 'FunctionsController@update_user_info')->name('update_user_info');
Route::post('/update_customer_info', 'FunctionsController@update_customer_info')->name('update_customer_info');
Route::post('/func_change_status', 'FunctionsController@func_change_status');
Route::post('/func_like_change', 'FunctionsController@func_like_change');
Route::get('/func_like_delete/{id}/{user}', 'FunctionsController@func_like_delete')->name('func_like_delete');


Route::group([
    'as'         => 'admin.',
    'prefix'     => 'admin',
    'namespace'  => 'Admin',
    'middleware' => ['web', 'auth'],
], function () {

    Route::group(['as' => 'customer.', 'namespace' => 'Customer'], function () {
        Route::resource('customers', 'CustomerController');
        Route::resource('groups', 'GroupController');
    });

    Route::group(['as' => 'catalog.', 'namespace' => 'Catalog'], function () {
        Route::resource('categories', 'CategoryController');
        Route::resource('products', 'ProductController');
    });

});

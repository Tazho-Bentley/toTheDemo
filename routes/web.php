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

Auth::routes();

Route::group(['middleware' => ['auth']], function() {


	Route::get('/home', 'HomeController@index')->name('home');


	Route::get('users',['as'=>'users.index','uses'=>'UserController@index']);
	Route::get('users-create',['as'=>'users.create','uses'=>'UserController@create']);
	Route::post('users/create',['as'=>'users.store','uses'=>'UserController@store']);
	Route::get('users-{id}',['as'=>'users.show','uses'=>'UserController@show']);
	Route::get('edit-{id}',['as'=>'users.edit','uses'=>'UserController@edit']);
	Route::patch('users/{id}',['as'=>'users.update','uses'=>'UserController@update']);
	Route::delete('users/{id}',['as'=>'users.destroy','uses'=>'UserController@destroy']);

	Route::get('accounts',['as'=>'accounts.index','uses'=>'AccountController@index']);
	Route::get('accounts-create',['as'=>'accounts.create','uses'=>'AccountController@create']);
	Route::post('accounts/create',['as'=>'accounts.store','uses'=>'AccountController@store']);
	Route::get('accounts-{id}',['as'=>'accounts.show','uses'=>'AccountController@show']);
	Route::get('accounts_edit-{id}',['as'=>'accounts.edit','uses'=>'AccountController@edit']);
	Route::patch('accounts/{id}',['as'=>'accounts.update','uses'=>'AccountController@update']);
	Route::delete('accounts/{id}',['as'=>'accounts.destroy','uses'=>'AccountController@destroy']);

	Route::get('employees',['as'=>'employees.index','uses'=>'EmployeeController@index']);
	Route::get('employees-create',['as'=>'employees.create','uses'=>'EmployeeController@create']);
	Route::post('employees/create',['as'=>'employees.store','uses'=>'EmployeeController@store']);
	Route::get('employees-{id}',['as'=>'employees.show','uses'=>'EmployeeController@show']);
	Route::get('employees_edit-{id}',['as'=>'employees.edit','uses'=>'EmployeeController@edit']);
	Route::patch('employees/{id}',['as'=>'employees.update','uses'=>'EmployeeController@update']);
	Route::delete('employees/{id}',['as'=>'employees.destroy','uses'=>'EmployeeController@destroy']);

	Route::get('pos',['as'=>'pos.index','uses'=>'PointOfSaleController@index']);
	Route::get('pos-create',['as'=>'pos.create','uses'=>'PointOfSaleController@create']);
	Route::post('pos/create',['as'=>'pos.store','uses'=>'PointOfSaleController@store']);
	Route::get('pos-{id}',['as'=>'pos.show','uses'=>'PointOfSaleController@show']);
	Route::get('pos_edit-{id}',['as'=>'pos.edit','uses'=>'PointOfSaleController@edit']);
	Route::patch('pos/{id}',['as'=>'pos.update','uses'=>'PointOfSaleController@update']);
	Route::delete('pos/{id}',['as'=>'pos.destroy','uses'=>'PointOfSaleController@destroy']);

    Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index']);
	Route::get('roles-create',['as'=>'roles.create','uses'=>'RoleController@create']);
	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store']);
	Route::get('roles-{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
	Route::get('roles_edit-{id}',['as'=>'roles.edit','uses'=>'RoleController@edit']);
	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update']);
	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy']);

});

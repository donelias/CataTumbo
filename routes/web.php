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

use App\Municipality;
use App\Parish;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('admin/roles', 'Admin\\RolesController',[
    'names' => [
        'index' => 'role-index',
        'create' => 'role-new',
        'edit' => 'role-edit',
        'show' => 'role-show',
    ]
]);
Route::resource('admin/statu', 'Admin\\StatuController',[
    'names' => [
        'index' => 'statu-index',
        'create' => 'statu-new',
        'edit' => 'statu-edit',
        'show' => 'statu-show',
    ]
]);
Route::resource('admin/type-person', 'Admin\\TypePersonController',[
    'names' => [
        'index' => 'type-person-index',
        'create' => 'type-person-new',
        'edit' => 'type-person-edit',
        'show' => 'type-person-show',
    ]
]);
Route::resource('admin/sector', 'Admin\\SectorController',[
    'names' => [
        'index' => 'sector-index',
        'create' => 'sector-new',
        'edit' => 'sector-edit',
        'show' => 'sector-show',
    ]
]);

Route::get('admin/sector/municipalities/{state_id}', 'Admin\\SectorController@getMunicipalities');
Route::get('admin/sector/parishes/{municipality_id}', 'Admin\\SectorController@getParishes');



Route::resource('admin/user', 'Admin\\UserController',[
    'names' => [
        'index' => 'user-index',
        'create' => 'user-new',
        'edit' => 'user-edit',
        'show' => 'user-show',
    ]
]);

Route::resource('admin/customers', 'Admin\\PersonController',[
    'names' => [
        'index' => 'customers-index',
        'create' => 'customers-new',
        'edit' => 'customers-edit',
        'show' => 'customers-show',
    ]
]);
Route::get('admin/customers/municipalities/{state_id}', 'Admin\\SectorController@getMunicipalities');
Route::get('admin/customers/parishes/{municipality_id}', 'Admin\\SectorController@getParishes');
Route::get('admin/customers/sectors/{parish_id}', 'Admin\\SectorController@getSectors');


Route::resource('admin/employees', 'Admin\\PersonController',[
    'names' => [
        'index' => 'employees-index',
        'create' => 'employees-new',
        'edit' => 'employees-edit',
        'show' => 'employees-show',
    ]
]);
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


Route::resource('/', 'WelcomeController');

Route::resource('login', 'LoginController');

Route::resource('categorias', 'CategoryController');

Route::resource('productos', 'ProductController');

Route::resource('tiendas', 'ShopController');

Route::resource('usuarios', 'UserController');

Route::resource('sucursales', 'BranchController');

Route::resource('promociones','PromotionController');

Route::resource('municipios', 'MunicipalityController');

Route::resource('estados', 'StateController');

Route::get('pagos', 'PaymentsController@index');

Route::get("pagos/success", "PaymentsController@store");

Route::get('realizarpago', 'GeneratePayment@index');

// Definicion de recusrsos anidados
Route::resource('estados.municipios', 'StateMunicipalityController');

Auth::routes();

Route::get('/home', 'ProductController@index')->name('home');
Route::get('/membresia', 'MemberShipsController@index')->name('MemberShip');
Route::get('/productoss', 'ProductSearch@index')->name('ProductSearch');
Route::get('/productos/{id}', 'OneProductController@index')->name('OneProduct');
Route::resource('excel','ExcelController');
Route::get('productossucursalreporte/{id}','BranchProductsExcelController@index')->name('productossucursalreporte');
Route::resource('usuariosexcel','UserExcelController');
Route::get('/usuarios/activo/{id}', 'UserController@soft');
Route::get('/sucursalproductos/{id}', 'BranchProductsController@index');
Route::resource('sucursales.producto', 'BranchProductsController');
Route::get('productoAA/{id}/', 'ProductController@soft');
Route::get('productosdesucursal/{id}', 'ProductsBranchController@index');

Route::get('producto/buscar', 'ProductSearch@search');

Route::get('imagenes/{path}',function($path){
  return response()->file(storage_path($path));
})->where('path','.+')->name('images');

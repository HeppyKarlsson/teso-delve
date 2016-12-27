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


Auth::routes();

include('ajax.php');

Route::get('/import-data', 'ImportController@import');
Route::get('/export', 'ImportController@export');


Route::get('/character/{character}', 'CharacterController@show')->name('characters.show');



Route::get('/dungeons', 'DungeonController@index')->name('dungeons.index');
Route::put('/dungeon/{dungeon}/set', 'DungeonController@addSet')->name('dungeon.addSet');
Route::get('/dungeon/{dungeon}', 'DungeonController@show')->name('dungeon.show');

Route::get('/zones', 'ZoneController@index')->name('zones.index');
Route::get('/zone/{zoneId}', 'ZoneController@show')->name('zone.show');


Route::get('/my-sets', 'SetController@mySets')->name('set.my-sets');
Route::get('/set/craftable', 'SetController@craftable')->name('set.craftable');
Route::get('/set/monster', 'SetController@monster')->name('set.monster');
Route::get('/set/{set}', 'SetController@show')->name('set.show');
Route::post('/set/{set}/update', 'SetController@update')->name('set.update');
Route::get('/set/{set}/edit', 'SetController@edit')->name('set.edit');


Route::get('/item/{item}', 'ItemController@show')->name('item.show');


Route::post('/import-data', 'ImportController@upload')->name('import.upload');
Route::get('/import', 'ImportController@index')->name('import.index');

Route::get('/home', 'SetController@mySets')->name('home.index');
Route::get('/', 'HomeController@index');


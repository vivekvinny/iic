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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/subgroups', 'HomeController@getSubgroups')->name('subgroups');
Route::get('/home/subgroups/{id}', 'HomeController@getSubgroupStudents')->name('subgroup');
Route::get('/home/subgroups_submit/{id}', 'HomeController@postSubgroupStudents')->name('postsubgroup');
Route::get('/home/groups', 'HomeController@getGroups')->name('groups');
Route::get('/home/groups/{id}', 'HomeController@getGroupSubgroups')->name('group');
Route::get('/home/groups_submit/{id}', 'HomeController@postGroupSSubgroups')->name('postgroup');

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
    return view('welcome');
});

Route::namespace('algorithms')->prefix('algorithm')->group(function() {
    Route::get('/search/binary', 'SearchController@binarySearch');
    Route::get('/sort/selection', 'SortController@selectionSort');
    Route::get('/sort/quick', 'SortController@getQuickSort'); //?a[]=7&a[]=1&a[]=5&a[]=2
    Route::get('/recursion/countdown/{i}', 'RecursionController@countDown');
    Route::get('/recursion/factorial/{i}', 'RecursionController@factorial');
});

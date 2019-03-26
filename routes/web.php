<?php
//リスト一覧画面
Route::get('/','ListingsController@index');

//リスト新規画面
Route::get('/new', 'ListingsController@new')->name('new');

//リスト新規処理
Route::post('/listings','ListingsController@store');

//リスト更新画面
Route::get('/listingsedit/{listing_id}', 'ListingsController@edit');

//リスト更新処理
Route::post('/listing/edit','ListingsController@update');

//リスト削除処理
Route::get('/listingsdelete/{listing_id}', 'ListingsController@destroy');
//===ここまで追加===

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

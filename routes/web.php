<?php

Route::get('/', 'PageController@index');
Route::get('/prices', 'PageController@prices');
Route::get('/family', 'PageController@family');
Route::get('/contact-us', 'PageController@contact');
Route::get('/about-us', 'PageController@about');


Route::get('local-moving/{slug}', 'PageController@localMovingArea')->name('local-moving.area');
Route::get('local-moving', 'PageController@localMoving')->name('local-moving');

<?php

Route::get('/', 'PageController@index');
Route::get('/prices', 'PageController@prices')->name('prices');
Route::get('/family', 'PageController@family')->name('family');
Route::get('/contact-us', 'PageController@contact')->name('contact-us');
Route::get('/about-us', 'PageController@about')->name('about-us');
Route::get('/moving-quote', 'PageController@quote');

Route::post('contact-us', 'PageController@contactUs');


Route::name('services.')->group(function () {
    Route::get('local-moving/{slug}', 'PageController@localMovingArea')->name('local-moving.area');
    Route::get('local-moving', 'PageController@localMoving')->name('local-moving');

    Route::get('long-distance-movers', 'PageController@interstateMoving')->name('interstate-moving');
    Route::get('storage', 'PageController@storage')->name('storage');
});

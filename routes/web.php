<?php

Route::get('/', 'PageController@index');
Route::get('/prices', 'PageController@prices')->name('prices');
Route::get('/family', 'PageController@family')->name('family');
Route::get('/contact-us', 'PageController@contact')->name('contact-us');
Route::get('/about-us', 'PageController@about')->name('about-us');
Route::get('/privacy-policy', 'PageController@privacy')->name('privacy');
Route::get('/moving-quote', 'PageController@quote');

Route::post('contact-us', 'PageController@contactUs');
Route::get('/sitemap.xml', 'PageController@sitemap');


Route::name('services.')->group(function () {
    Route::get('local-moving/{slug}', 'PageController@localMovingArea')->name('local-moving.area');
    Route::get('local-moving', 'PageController@localMoving')->name('local-moving');

		Route::get('long-distance-movers/{slug}', 'PageController@longDistanceArea')->name('long-distance.area');
    Route::get('long-distance-movers', 'PageController@interstateMoving')->name('interstate-moving');

    Route::get('storage', 'PageController@storage')->name('storage');

		Route::get('packers-and-movers', 'PageController@packing')->name('packing');
});

Auth::routes();

// Route::get('/blog', function () {
//   $posts = App\Post::latest()->paginate(9);
//   return view('blog/index')->withPosts($posts);
// });
// Route::get('/blog/{slug}', ['as' => 'post.single', 'uses' => 'PostController@getSingle' ]) -> where('slug', '[\w\d\-\_]+');

Route::middleware('auth:web')->group(function () {
  Route::get('/admin', ['uses' => 'PageController@admin', 'as' => 'admin.index']);
  Route::resource('/admin/posts', 'PostController');
  Route::get('/admin/posts/{id}/delete', ['uses' => 'PostController@destroy', 'as' => 'post.delete']);
  Route::post('/admin/posts/{id}','PostController@update');
  Route::resource('/admin/prices', 'PriceController');
  Route::post('/admin/prices/{id}','PriceController@update');
});
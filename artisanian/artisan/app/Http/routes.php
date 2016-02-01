<?php
/*GET routes*/
Route::get('/', 'MainController@index');

Route::get('/add-artisan', 'MainController@addArtisan');

Route::get('/view-artisan/{fakeId}/{location}/{fName}', 'MainController@getArtisanDetails');

Route::get('/continue-reg/{user_id}/{regRef}/{numeric}', 'MainController@getCompletionReg');

Route::get('/all-pro', 'MainController@getAllpro');

Route::get('/search-check/{service}/{local}/{cat}', 'MainController@getSearchResult');

Route::get('/logout/user', 'MainController@getFlushUser');

Route::get('/autocomplete', 'MainController@getAutocomplete');
Route::get('/locationcomplete', 'MainController@getLocationComplete');



/*POST routes*/
Route::post('/add-artisan', 'MainController@postAddArtisan');
Route::post('/continue-reg/{user_id}/{regRef}/{numeric}', 'MainController@postContinueReg');
Route::post('/map', 'MainController@postMapCheck');
Route::post('/postreview', 'MainController@postReview');
Route::post('/ModalLoginForReview', 'MainController@postUserLoginOnModal');

/*MessageController*/
Route::post('/sendMsg', 'MessageController@sendUserMessage');
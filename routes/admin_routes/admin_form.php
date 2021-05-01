<?php
Route::name('admin.')->group(function () {
	// Route::get('/create_form', 'Admin\Forms\FormController@formCreate')->name('create_question');
    Route::get('/liste_form', 'Admin\Forms\FormController@listeForm')->name('liste_form');
    Route::get('/add_form', 'Admin\Forms\FormController@add_form')->name('add_form');
});

<?php
Route::name('admin.')->group(function () {
	// Route::get('/create_form', 'Admin\Forms\FormController@formCreate')->name('create_question');
    Route::get('/liste_form_page', 'Admin\FormPages\FormPageController@listeForm_page')->name('liste_form_page');
});

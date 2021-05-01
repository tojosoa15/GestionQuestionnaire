<?php
Route::name('admin.')->group(function () {
	// Route::get('/create_form', 'Admin\Forms\FormController@formCreate')->name('create_question');
    Route::get('/liste_answer', 'Admin\Answers\AnswerController@listeAnswer')->name('liste_answer');
});

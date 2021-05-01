<?php
Route::name('admin.')->group(function () {
	Route::get('/create_question', 'Admin\Questions\QuestionController@formCreate')->name('create_question');
    Route::get('/liste_question', 'Admin\Questions\QuestionController@listeQuestion')->name('liste_question');
});

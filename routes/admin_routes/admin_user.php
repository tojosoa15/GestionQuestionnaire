<?php
Route::name('admin.')->group(function () {
    Route::get('/auth/register', ['as' => 'auth.register','uses'=>'Admin\Auth\RegisterController@showRegistrationForm']);
    Route::post('/auth/register', ['as' => 'auth.register','uses'=>'Admin\Auth\RegisterController@createRegistration']);
    Route::get('/auth/tous/datatable', ['as' => 'auth.tous.datatable','uses'=>'Admin\Auth\UserController@listeUser']);
    Route::get('/auth/change_profil/user:{id_user}', 'Admin\Auth\UserController@editProfilForm')->name('auth.change_profil');
    // Route::post('/auth/change_profil/user:{id_user}', 'Admin\Auth\UserController@saveEditProfil')->name('auth.change_profil');
    Route::post('/auth/change_image/user:{id_user}', 'Admin\Auth\UserController@savePhotoProfil')->name('auth.change_image');

    Route::get('/auth/editUser_info', ['as' => 'auth.editUser_info','uses'=>'Admin\Auth\UserController@showModalEditUser']);

    Route::get('/auth/editUserAjax', [
        'as' => 'auth.editUserAjax','uses'=>'Admin\Auth\UserController@editUserAjax']);

    Route::get('/auth/delete_user', [
        'as' => 'auth.delete_user','uses'=>'Admin\Auth\UserController@deleteUser']);

    Route::post('/auth/register_edit', ['as' => 'auth.register_edit','uses'=>'Admin\Auth\RegisterController@saveEditProfilAjax']);
});

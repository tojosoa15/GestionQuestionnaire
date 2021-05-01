<?php
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'Admin\Auth\LoginController@showLoginForm');
    Route::get('/auth/login', 'Admin\Auth\LoginController@showLoginForm')->name('auth.login');
    Route::post('/auth/login', 'Admin\Auth\LoginController@login')->name('auth.login');
    Route::get('/auth/logout', 'Admin\Auth\LoginController@logout')->name('auth.logout');

    Route::get('/auth/password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/auth/password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('/auth/password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/auth/password/reset', 'Admin\Auth\ResetPasswordController@reset')->name('password.reset');


});

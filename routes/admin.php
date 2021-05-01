<?php
Route::get('/home', array_merge(['uses' => 'Admin\HomeController@index']))->name('admin.home');

$real_path = realpath(__DIR__).DIRECTORY_SEPARATOR.'admin_routes'.DIRECTORY_SEPARATOR;
include_once($real_path .'admin_user.php');
include_once($real_path .'admin_answer.php');
include_once($real_path .'admin_form.php');
include_once($real_path .'admin_form_page.php');
include_once($real_path .'admin_question.php');

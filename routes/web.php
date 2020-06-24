<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('/admin', '/admin/dashboard', 301);

require('admin.php');
require('landing-page.php');
require('report.php');


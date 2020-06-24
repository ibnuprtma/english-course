<?php

Route::get('/', function () {
    return view('welcome');
});


require('admin.php');
require('landing-page.php');
require('report.php');
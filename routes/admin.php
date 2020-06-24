<?php


Route::name('admin.')->group(function () {
  Route::group([

    'namespace'     => 'admin',
    'prefix'        => 'admin'

  ], function () {

    Route::view('/dashboard', '/admin/dashboard')->name('dashboard');
    
  });
});
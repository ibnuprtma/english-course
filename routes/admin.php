<?php


Route::name('admin.')->group(function () {
  Route::group([

    'namespace'     => 'admin',
    'prefix'        => 'admin',
    'middleware'    => ['auth','checkRole:admin'],

  ], function () {

    
  });
});


Route::name('admin.')->group(function () {
  Route::group([

    'namespace'     => 'admin',
    'prefix'        => 'admin',
    'middleware'    => ['auth','checkRole:student'],

  ], function () {

    
  });
});

Route::name('admin.')->group(function () {
  Route::group([

    'namespace'     => 'admin',
    'prefix'        => 'admin',
    'middleware'    => ['auth','checkRole:student,admin'],

  ], function () {

    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
    
  });
});
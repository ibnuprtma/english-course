<?php


Route::name('admin.')->group(function () {
  Route::group([

    'namespace'     => 'Admin',
    'prefix'        => 'admin',
    'middleware'    => ['auth','checkRole:admin'],

  ], function () {

    Route::resource('students', 'StudentController');
    Route::resource('payments', 'PaymentController');
    Route::resource('questions', 'QuestionController');
    Route::resource('user', 'UserController');

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
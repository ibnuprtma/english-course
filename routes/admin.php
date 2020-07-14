<?php


Route::name('admin.')->group(function () {
  Route::group([

    'namespace'     => 'Admin',
    'prefix'        => 'admin',
    'middleware'    => ['auth','checkRole:admin'],

  ], function () {

    Route::resource('student', 'StudentController');
    Route::resource('payment', 'PaymentController');
    Route::resource('question', 'QuestionController');
    Route::resource('user', 'UserController');

    Route::put( '/user/change-password/{id}', 'UserController@changepassword' )->name('user.change-password');

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
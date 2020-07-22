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
    Route::prefix('user')->group(function () {  
      Route::put( '/change-password/{id}', 'UserController@changepassword' )->name('user.change-password');
    });


  });
});


Route::name('admin.')->group(function () {
  Route::group([

    'namespace'     => 'Admin',
    'prefix'        => 'admin',
    'middleware'    => ['auth','checkRole:student'],

  ], function () {


    Route::prefix('students')->group(function () {  
        Route::resource('profil', 'ProfilStudentController');
        Route::prefix('profil')->group(function () {  
          Route::put( '/student-password/{id}', 'ProfilStudentController@studentpassword' )->name('profil.student-password');
        });
        Route::resource('payment-individual', 'PaymentStudentController');
        Route::resource('test', 'TestStudentController');
    });
    
  });
});

Route::name('admin.')->group(function () {
  Route::group([

    'namespace'     => 'Admin',
    'prefix'        => 'admin',
    'middleware'    => ['auth','checkRole:student,admin'],

  ], function () {

    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');
    
  });
});
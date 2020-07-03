<?php


Route::name('landing-page.')->group(function () {
  Route::group([

    'namespace'     => 'LandingPage'

  ], function () {

    Route::view('/pricing', '/landing-page/pricing/index')->name('pricing');
    Route::view('/about-us', '/landing-page/about-us/index')->name('about-us');
    Route::view('/contact', '/landing-page/contact/index')->name('contact');

    Route::post('/register-student', 'RegisterStudentController@store')->name('register-student');
    
  });
});
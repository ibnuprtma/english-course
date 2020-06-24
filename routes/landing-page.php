<?php


Route::name('landing-page.')->group(function () {
  Route::group([

    'namespace'     => 'landing-page'

  ], function () {

    Route::view('/pricing', '/landing-page/pricing/index')->name('pricing');
    Route::view('/about-us', '/landing-page/about-us/index')->name('about-us');
    Route::view('/contact', '/landing-page/contact/index')->name('contact');
    
  });
});
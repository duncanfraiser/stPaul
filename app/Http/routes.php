<?php

Route::resource('/', 'HomeController');
Route::resource('member', 'MembersController');
Route::resource('forms', 'FormController');
Route::resource('ChristLife', 'ChristLifeController');
Route::resource('catechumen', 'CatechumensController');
Route::resource('RCIA', 'RciaController');
Route::resource('fileuploads', 'FileuploadController');
Route::resource('education', 'EducationController');
Route::resource('announcement', 'AnnouncementsController');
Route::resource('welcome', 'WelcomeController');
Route::resource('bulletin', 'BulletinController');
Route::resource('homily', 'HomilyController');
Route::resource('youth', 'YouthController');
Route::resource('masstime', 'MasstimeController');
Route::resource('ministry', 'MinistryController');
Route::resource('member/{member}/dependents', 'DependentsController');
Route::resource('attending', 'AttendingController');

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::auth();



<?php

Route::resource('/', 'HomeController');
Route::resource('member', 'MembersController');
Route::resource('forms', 'FormController');

/*Christ Lise Routes*/
Route::get('/ChristLife/email', 'ChristLifeController@email');
Route::get('/ChristLife/allergies', 'ChristLifeController@allergies');
Route::get('/ChristLife/allergiesEmail', 'ChristLifeController@allergiesEmail');
Route::get('/ChristLife/ride', 'ChristLifeController@ride');
Route::get('/ChristLife/rideEmail', 'ChristLifeController@rideEmail');
Route::get('/ChristLife/comments', 'ChristLifeController@comments');
Route::get('/ChristLife/info', 'ChristLifeController@info');
Route::resource('ChristLife', 'ChristLifeController');
Route::get('/ChristLife/{id}/thanks', 'ChristLifeController@thanks');

/* RCIA Routes*/
Route::get('RCIA/baptized', 'CatechumensController@baptized');
Route::get('RCIA/annulment', 'CatechumensController@annulment');
Route::resource('RCIA', 'CatechumensController');
Route::get('/RCIA/{id}/thanks', 'CatechumensController@thanks');


//Route::resource('RCIA', 'RciaController');


Route::resource('fileuploads', 'FileuploadController');
Route::resource('announcement', 'AnnouncementsController');
Route::resource('welcome', 'WelcomeController');
Route::resource('bulletin', 'BulletinController');
Route::resource('homily', 'HomilyController');
Route::resource('youth', 'YouthController');
Route::resource('masstime', 'MasstimeController');
Route::resource('ministry', 'MinistryController');
Route::resource('member/{member}/dependents', 'DependentsController');
Route::resource('attending', 'AttendingController');
Route::resource('contact', 'ContactController');

Route::resource('prayer', 'PrayerController');
Route::resource('suggested_prayer', 'SuggestedPrayerController');
Route::resource('Lectio_Divina', 'DivinaController');
Route::resource('contemplative', 'ContemplativeController');


/*education routes*/
Route::get('education/studentEmail', 'EducationController@studentEmail');
Route::get('education/familyEmail', 'EducationController@familyEmail');
Route::get('education/grade', 'EducationController@grade');
Route::get('education/{education}/family', 'EducationController@family');
Route::get('education/{education}/family/{student}', 'EducationController@student');
Route::resource('education', 'EducationController');
Route::resource('education/{education}/student', 'StudentController');



/*Route::get('/', function () {
    return view('welcome');
});*/


Route::auth();



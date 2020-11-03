<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// Route::resource('/a','pageMastercController');
Route::resource('/','pageAccueilcController');
Route::resource('temps','pageEmploistempsController');
// ->middleware('auth');

//ROUTE POUR LES DEMANDENT DE CREA1TION DE COMPTE ETUDIANTS
Route::get('ncomptes','NcompteController@form')->name('ncompte.form');
Route::post('ncompte','NcompteController@store')->name('ncompte.store');
Route::get('ncompte','NcompteController@liste')->name('ncompte.liste');
 Route::get('verification/compte/{id}/{nom}','NcompteController@verification')->name('ncompte.verification');

Route::get('oeil', function () {
    return view('users_views/oeil');
});

Route::get('w1', function () {
    return view('\welcome');
});

Route::get('valid', function () {
    return view('./users_views/new_compte/ncompte_message');
});


Route::get('test', function () {
    return view('users_views/test');
});


Route::get('Ncompte', function () {
    return view('./users_views/new_compte/form_newCompte');
});


Route::get('ncliste', function () {
    return view('./users_views/new_compte/ncompte_liste');
});

/**********************************************************DASHBOARD OPTION *********************************************************/


Route::resource('universite','UniversiteController');
Route::resource('actualite','ActualiteController');
Route::resource('info','TopInfoController');
Route::resource('departement','DepartementController');
Route::get('oeil','frontArticleController@index');
    

Route::resource('filiere','FiliereController');
Route::resource('module','ModuleController');
Route::resource('code','CodeFilController');
Route::resource('prof','ProffesseurController');

Route::resource('grade','GradeController');
Route::resource('salle','LieuController');
Route::resource('salle','LieuController');
Route::resource('niveau','NiveauController');

Route::resource('categorie','CategorieProgController');
Route::resource('programme','ProgrammeController');
Route::resource('listprog', 'programmeListeControllerr');

Route::get('form','configController@index1')->name('config.form');
Route::get('liste','configController@index2')->name('config.liste');
Route::get('liste_programme','configController@index4')->name('liste.prog');
Route::get('Admino','configController@index5')->name('homes.admin')->middleware('admin');


/** ROUTE ENVOYE DE MAIL D'ACTIVATION DE COMPTE*/
Route::get("message", "NcompteController@formemailNotification");
Route::post("message", "NcompteController@sendemailNotification")->name('email.compte.active');

Route::put("terminer", "NcompteController@terminers")->name('ncompte.terminer');


Auth::routes();
Route::get('/Accès_Reserver', 'HomeController@index')->name('Accès_Reserver');
Route::get('admin/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');

Route::resource('contacts', 'ContactController');

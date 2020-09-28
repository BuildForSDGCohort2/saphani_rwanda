<?php

use App\Http\Controllers\LoanController;
use App\Http\Controllers\UserHomecontroller;
use Illuminate\Support\Facades\Route;
use App\Province;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/districts','Ajaxquery@districts')->name('districts');
Route::post('/Sector','Ajaxquery@Sector')->name('Sector');
Route::post('/Cell','Ajaxquery@Cell')->name('Cell');
Route::post('/village','Ajaxquery@Village')->name('village');
Route::post('/Itsinda','Ajaxquery@Itsinda')->name('Itsinda');

Route::group(['middleware'=> ['auth','admin']], function () {
	Route::get('dashbord','RecodsControler@index');
        view()->composer(['*'], function($view) { $ProvinceRegion=Province::all();
         $view->with(compact('ProvinceRegion'));});

// admin controller
    Route::get('/dashboard','Admincontroller@dashboard');
    Route::get('/Groups','Admincontroller@Group');
    Route::post('/registerGroups','Admincontroller@registerGroups');

    Route::get('/members','Admincontroller@members');
    Route::get('/members/{id}','Admincontroller@membersavings');
    Route::post('/Savingprocess','Admincontroller@Savingprocess');
    Route::get('/profite','Admincontroller@profite');
    Route::get('/Saving','Admincontroller@Saving');
    Route::post('/Loan','Admincontroller@Loan');
    Route::get('/profile','Admincontroller@profile');
    Route::post('/Updateprofile','Admincontroller@Updateprofile');
    Route::get('/Investiment','Admincontroller@Investiment');

// UseHomecontroller
Route::get('/Useprofile', 'UserHomecontroller@Useprofile');
Route::get('loan/{id}','LoanController@index');
Route::post('/createloan','LoanController@store');
Route::get('/payingloan/{id}','LoanController@payingloan');
Route::post('/crearloan','LoanController@crearloan');

});

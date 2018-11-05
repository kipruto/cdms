<?php
use Illuminate\Support\Facades\Route;
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

//Route::resource('users', 'UserController');

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin|supervisor']], function (){
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
    Route::resource('subcounties', 'SubcountyController');
    Route::resource('stations', 'StationController');
    Route::resource('patients', 'PatientController');
    Route::resource('cases','IncidentController');
});

Route::group(['prefix' => 'officer', 'middleware' => ['role:admin|supervisor|laboratory-technician|officer']], function (){
    Route::get('patient/{id}/sample','SampleController@process');
    Route::resource('patients', 'PatientController');
    Route::resource('samples', 'SampleController');
    Route::resource('cases','IncidentController');
});

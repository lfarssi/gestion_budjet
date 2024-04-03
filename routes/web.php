<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BudjetController;
use App\Http\Controllers\DetailsCorrectionController;
use App\Http\Controllers\JuryController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\pdfController;
use App\Http\Controllers\pdfPerson;
use App\Http\Controllers\PersonnelController;
use App\Models\DetailsCorrection;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/partials',[ EtablissementController::class,"index"])
->name("partials.index");

Route::post('/login',[ AuthController::class,"login"])
->name("login");
Route::get('/login',[ AuthController::class,"show"])
->name("login.show");
Route::get('/logout',[ AuthController::class,"logout"])
->name("logout");

Route::get('/personne',[ PersonnelController::class,"index"])
->name("personne");
Route::get('/personne/create',[ PersonnelController::class,"create"])
->name("add-personne");
Route::post('/personne/store',[ PersonnelController::class,"store"])
->name("store-personne");
Route::get('/personne/show/{id}',[ PersonnelController::class,"show"])
->name("show-personne")->where('id','\d+');
Route::delete('/personne/{id}',[ PersonnelController::class,"destroy"])
->name("delete-personne")->where('id','\d+');
Route::get('/personne/{id}/edite',[ PersonnelController::class,"edite"])
->name("edite-personne")->where('id','\d+');
Route::put('/personne/{id}',[ PersonnelController::class,"update"])
->name("update-personne")->where('id','\d+');

Route::get('/etablissement',[ EtablissementController::class,"index"])
->name("etablissement");
Route::get('/etablissement/create',[ EtablissementController::class,"create"])
->name("add-etablissement");
Route::post('/etablissement/store',[ EtablissementController::class,"store"])
->name("store-etablissement");
Route::get('/etablissement/show/{id}',[ EtablissementController::class,"show"])
->name("show-etablissement")->where('id','\d+');
Route::delete('/etablissement/{id}',[ EtablissementController::class,"destroy"])
->name("delete-etablissement")->where('id','\d+');
Route::get('/etablissement/{id}/edite',[ EtablissementController::class,"edite"])
->name("edite-etablissement")->where('id','\d+');
Route::put('/etablissement/{id}',[ EtablissementController::class,"update"])
->name("update-etablissement")->where('id','\d+');

Route::get('/budjet',[ BudjetController::class,"index"])
->name("budjet");
Route::get('/budjet/create',[ BudjetController::class,"create"])
->name("add-budjet");
Route::post('/budjet/store',[ BudjetController::class,"store"])
->name("store-budjet");
Route::get('/budjet/show/{id}',[ BudjetController::class,"show"])
->name("show-budjet")->where('id','\d+');
Route::delete('/budjet/{id}',[ BudjetController::class,"destroy"])
->name("delete-budjet")->where('id','\d+');
Route::get('/budjet/{id}/edite',[ BudjetController::class,"edite"])
->name("edite-budjet")->where('id','\d+');
Route::put('/budjet/{id}',[ BudjetController::class,"update"])
->name("update-budjet")->where('id','\d+');

Route::get('budjet-pdf',[pdfController::class,"generatePDF"])
->name("budjet-pdf");
Route::get('personne-pdf',[pdfPerson::class,"generatePDF"])
->name("personne-pdf");


Route::get('/dashboard',[ DetailsCorrectionController::class,"index"])
->name("dashboard");
Route::get('/dashboard/create',[ DetailsCorrectionController::class,"create"])
->name("add-dashboard");
Route::post('/dashboard/store',[ DetailsCorrectionController::class,"store"])
->name("store-dashboard");
Route::get('/dashboard/show/{id}',[ DetailsCorrectionController::class,"show"])
->name("show-dashboard")->where('id','\d+');
Route::delete('/dashboard/{id}',[ DetailsCorrectionController::class,"destroy"])
->name("delete-dashboard")->where('id','\d+');
Route::get('/dashboard/{id}/edite',[ DetailsCorrectionController::class,"edite"])
->name("edite-dashboard")->where('id','\d+');
Route::put('/dashboard/{id}',[ DetailsCorrectionController::class,"update"])
->name("update-dashboard")->where('id','\d+');

Route::get('/jurie',[ JuryController::class,"index"])
->name("jurie");
Route::get('/jurie/create',[ JuryController::class,"create"])
->name("add-jurie");
Route::post('/jurie/store',[ JuryController::class,"store"])
->name("store-jurie");
Route::get('/jurie/show/{id}',[ JuryController::class,"show"])
->name("show-jurie")->where('id','\d+');
Route::delete('/jurie/{id}',[ JuryController::class,"destroy"])
->name("delete-jurie")->where('id','\d+');
Route::get('/jurie/{id}/edite',[ JuryController::class,"edite"])
->name("edite-jurie")->where('id','\d+');
Route::put('/jurie/{id}',[ JuryController::class,"update"])
->name("update-jurie")->where('id','\d+');
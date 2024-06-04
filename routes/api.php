<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\DiplomeController;
use App\Http\Controllers\SecteurMetierController;
use App\Http\Controllers\MetierController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\CategorieServiceController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ChoixController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\ReserverController;
use App\Http\Controllers\ReponseController;
use App\Http\Controllers\ResultatController;

Route::apiResource('etablissements', EtablissementController::class);
Route::apiResource('utilisateurs', UtilisateurController::class);
Route::apiResource('diplomes', DiplomeController::class);
Route::apiResource('secteur-metiers', SecteurMetierController::class);
Route::apiResource('metiers', MetierController::class);
Route::apiResource('evenements', EvenementController::class);
Route::apiResource('actualites', ActualiteController::class);
Route::apiResource('tests', TestController::class);
Route::apiResource('categories', CategorieController::class);
Route::apiResource('partenaires', PartenaireController::class);
Route::apiResource('categorie-services', CategorieServiceController::class);
Route::apiResource('formations', FormationController::class);
Route::apiResource('medias', MediaController::class);
Route::apiResource('questions', QuestionController::class);
Route::apiResource('choix', ChoixController::class);
Route::apiResource('services', ServiceController::class);
Route::apiResource('offres', OffreController::class);
Route::apiResource('reservations', ReserverController::class);
Route::apiResource('reponses', ReponseController::class);
Route::apiResource('resultats', ResultatController::class);

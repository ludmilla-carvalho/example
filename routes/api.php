<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\LawyerTypeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OfficeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\TimelineController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('areas', [AreaController::class, 'index']);
Route::get('area/{slug}', [AreaController::class, 'show']);

Route::get('cities', [CityController::class, 'index']);

Route::get('faq', [FaqController::class, 'index']);

Route::get('lawyers', [LawyerController::class, 'index']);
Route::get('lawyers/filter', [LawyerController::class, 'filter']);
Route::get('lawyer/{slug}', [LawyerController::class, 'show']);

Route::get('lawyer_types', [LawyerTypeController::class, 'index']);

Route::post('newsletter', [NewsletterController::class, 'store']);
Route::get('newsletter/most_viewed', [NewsletterController::class, 'mostViewed']);

Route::get('offices', [OfficeController::class, 'index']);

Route::get('pages', [PageController::class, 'index']);
Route::get('page/{slug}', [PageController::class, 'show']);

Route::get('privacy', [PrivacyController::class, 'index']);

Route::get('terms', [TermController::class, 'index']);

Route::get('timeline', [TimelineController::class, 'index']);



//Route::get('lawyers', [LawyerController::class, 'index']);



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [SurveyController::class, 'index'])->name('Onderzoek');
Route::post('/send-survey', [SurveyController::class, 'sendSurvey'])->name('send-survey');

Route::post('/send-mail', [ContactController::class, 'sendMail'])->name('send-mail');
Route::get('/Contact', [ContactController::class, 'index'])->name('Contact');

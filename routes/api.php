<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/auth/register', 'SessionController@register');
Route::post('/auth/login', 'SessionController@login');

Route::get('/terms', 'SessionController@getTerms');
Route::get('/questions-answers/help', 'QuestionsAndAnswers@getQuestionsAnswersGuest');

Route::middleware('jwt')->group(function () {
    Route::get('/auth/user', 'SessionController@getAuthenticatedUser');
    Route::post('/auth/update-notification-status', 'SessionController@updateNotificationStatus');
    Route::get('/questions-answers/login', 'QuestionsAndAnswers@getQuestionsAnswersUser');
});

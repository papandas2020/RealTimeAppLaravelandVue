<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;
use App\Model\Question;

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

Route::apiResource('/question','QuestionController');

Route::get('/test/{id}',function($id){
   
    $question = Question::findorfail($id);
    echo $question->user->name;
   
});
Route::get('/user/{id}',function($id){

    $user = User::findorfail($id);
    echo $user->name;
});

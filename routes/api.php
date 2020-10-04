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
Route::apiResource('/category','CategoryController');
Route::apiResource('/question/{question}/reply','ReplyController');
Route::post('/like/{reply}','LikeController@likeIt');
Route::delete('/like/{reply}','LikeController@unLikeIt');
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('register', 'AuthController@register');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('me', 'AuthController@me');
});

// Route::get('/test',function(){

//     $papan = "iam papan das";
//     return Str::slug($papan);
// });


// Route::get('/test/{id}',function($id){
   
//     $question = Question::findorfail($id);
//     echo $question->category->name;
   
// });
// Route::get('/user/{id}',function($id){

//     $user = User::findorfail($id);
//     echo $user->name;
// });

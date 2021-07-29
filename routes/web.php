<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\QuestionsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [StudentController::class,'index'])->name('student.dashboard');
Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.home');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth','is_admin']], function () {
   
    // Course
    Route::delete('courses/destroy', [CourseController::class,'massDestroy'])->name('courses.massDestroy');
    Route::resource('courses', CourseController::class);

    // Quiz
    Route::delete('quizzes/destroy', [QuizController::class, 'massDestroy'])->name('quizzes.massDestroy');
    Route::resource('quizzes', QuizController::class);
    // Questions
    Route::delete('questions/destroy', [QuestionsController::class ,'massDestroy'])->name('questions.massDestroy');
    Route::resource('questions', QuestionsController::class);
});
Route::get('/course/{course}', [StudentController::class ,'display'])->name('student.display');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/quiz/{id}',  [StudentController::class,'displayQuiz'])->name('student.quiz');
    Route::resource('answer',AnswerController::class);
});






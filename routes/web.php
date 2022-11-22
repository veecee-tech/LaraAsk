<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Models\Question;

Route::get('/', function (){
    $question = Question::all();
    return view('welcome', ['questions'=>$question]);
})->name('index');

Route::resource('questions', QuestionController::class);
<?php

use App\Http\Controllers\memberController;
use App\Http\Controllers\StudentController;
use App\Models\student;
use Illuminate\Support\Facades\Route;


Route::get("/",[memberController::class,"index"])->name("members.index");
Route::post("/addMember",[memberController::class,"store"])->name("members.store");

Route::get("/registration",[StudentController::class,"showRegisterPage"])->name("students.register");
Route::post("/registerStudent",[StudentController::class,"registerStudent"])->name("students.store");
Route::get("/students",[StudentController::class,"index"])->name("students.index");


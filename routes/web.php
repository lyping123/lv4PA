<?php

use App\Http\Controllers\memberController;
use Illuminate\Support\Facades\Route;


Route::get("/a",[memberController::class,"index"])->name("members.index");
Route::post("/addMember",[memberController::class,"store"])->name("members.store");

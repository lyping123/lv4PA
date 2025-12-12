<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;

Route::get('/members',[apiController::class,'index'])->name('api.members.index');
Route::post('/addMember',[apiController::class,'store'])->name('api.members.store');
Route::post('/updateMember/{id}',[apiController::class,'update'])->name('api.members.update');
Route::delete('/deleteMember/{id}',[apiController::class,'destroy'])->name('api.members.delete');
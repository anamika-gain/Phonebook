<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FavlistController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\COntrollers\EmailController;
use App\Http\COntrollers\PhoneController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //contacts Routes
    Route::get('contacts', [ContactController::class, 'index'])->name('contacts');
    Route::get('allcontacts', [ContactController::class, 'allcontacts'])->name('allcontacts');
    Route::post('add-contact', [ContactController::class, 'store'])->name('store.contact');
    Route::get('edit-contacts/{id}', [ContactController::class, 'edit']);
    Route::post('update-contacts/{id}', [ContactController::class, 'update']);
    Route::post('delete-contacts/{id}', [ContactController::class, 'destroy']);
    Route::get('see-details/{id}', [ContactController::class, 'details']);
    Route::post('delete-phone/{id}', [ContactController::class, 'deletePhone']);
    Route::post('delete-email/{id}', [ContactController::class, 'deleteEmail']);
    //update phone and mail
    Route::post('edit-phone/{id}', [PhoneController::class, 'edit']);
    Route::post('edit-mail/{id}', [EmailController::class, 'edit']);
    Route::put('update-phone/{id}', [PhoneController::class, 'update']);
    Route::put('update-mail/{id}', [EmailController::class, 'update']);

    Route::get('allphone/{id}', [PhoneController::class, 'allphone']);
    Route::get('allemail/{id}', [EmailController::class, 'allemail']);
    Route::get('add/favlist/{id}', [ContactController::class,'Addfavlist']);
    Route::get('/favlist', [ContactController::class,'favlist'])->name('favlist');
    Route::post('delete-fav/{id}', [FavlistController::class, 'destroy']);
    Route::get('/allfavlist', [ContactController::class,'allfavlist'])->name('allfavlist');
    Route::get('/logoutuser', [LoginController::class,'logout'])->name('logoutuser');
 });
// Route::get('/logout', [App\Http\Controllers\Auth\LoginController,'logout'])->name('logout');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// //contacts Routes
// Route::get('contacts', [ContactController::class, 'index'])->name('contacts');
// Route::get('allcontacts', [ContactController::class, 'allcontacts'])->name('allcontacts');
// Route::post('add-contact', [ContactController::class, 'store'])->name('store.contact');
// Route::post('edit-contact/{id}', [ContactController::class, 'edit']);
// Route::put('update-contact/{id}', [ContactController::class, 'update']);
// Route::post('delete-contact/{id}', [ContactController::class, 'destroy']);

// Route::get('add/favlist/{id}', [ContactController::class,'Addfavlist']);
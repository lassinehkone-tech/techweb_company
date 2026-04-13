<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\ProjetController as AdminProjetController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware('auth.basic')->prefix('admin')->name('admin.')->group(function (): void {
    Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
    Route::resource('projets', AdminProjetController::class)->except(['show']);
});

<?php

use App\Http\Controllers\About\HistoryController;
use App\Http\Controllers\About\MissionController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OurPeopleController;
use App\Http\Controllers\readMoreController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\whyUsController;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/ourPeople', [OurPeopleController::class, 'index'])->name('ourPeople');
// Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/whyUs', [whyUsController::class, 'index'])->name('whyUs');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');


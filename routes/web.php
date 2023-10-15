<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::controller(AboutController::class)->group(function () {
    Route::get('/about/about-us', 'index')->name('pages.about.index');
    Route::get('/about/our-team', 'team')->name('pages.about.team');
});
Route::controller(PagesController::class)->group(function () {
    Route::get('/', 'index')->name('pages.welcome');
    Route::get('/contact', 'contact')->name('pages.contact');
    Route::post('/contact', 'sendMail')->name('pages.contactEmail');
    Route::get('/events', 'events')->name('pages.events');

    Route::get('/services', 'services')->name('pages.services');
    Route::get('/services/{id}/{slug}', 'showService')->name('pages.showService');

    Route::get('/blog', 'blog')->name('pages.blog');
    Route::get('/blog/{id}/{slug}', 'showBlog')->name('pages.showBlog');

    Route::get('/projects', 'projects')->name('pages.projects');
    Route::get('/projects/{id}/{slug}', 'showProject')->name('pages.showProject');
});

Route::controller(DonateController::class)->group(function () {
    Route::get('/donate', 'index')->name('pages.donate');
    Route::get('/donate/stripe', 'stripeDonation')->name('donations.stripe');
    Route::post('/donate/momo', 'momoDonation')->name('donations.momo');
    Route::post('/webhook', 'momoWebhook')->name("donations.webhook");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

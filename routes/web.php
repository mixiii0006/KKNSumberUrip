 <?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SejarahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('about');
});

Route::get('/sejarah', [SejarahController::class, 'publicIndex'])->name('sejarah.public');

use App\Http\Controllers\OrganisasiController;

Route::get('/organisasi', [OrganisasiController::class, 'index'])->name('organisasi.index');

Route::middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->group(function () {

    Route::resource('organisasi', OrganisasiController::class)->except(['index']);

    Route::resource('sejarah', SejarahController::class)->except(['show', 'index']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->group(function () {

    Route::resource('organisasi', OrganisasiController::class)->except(['index']);

    Route::resource('sejarah', SejarahController::class)->except(['show', 'index']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

Route::middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->group(function () {

    Route::resource('sejarah', SejarahController::class)->except(['show', 'index']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

// Remove or redirect /dashboard route
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
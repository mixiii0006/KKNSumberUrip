 <?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SejarahController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\ArtikelController;

use App\Models\Artikel;

Route::get('/', function () {
    $artikels = Artikel::orderBy('tanggal_publish', 'desc')->limit(3)->get();
    return view('welcome', compact('artikels'));
})->name('welcome');

Route::get('/about', function () {
    return view('about');
});

Route::get('/sejarah', [SejarahController::class, 'publicIndex'])->name('sejarah.public');

Route::get('/organisasi', [OrganisasiController::class, 'index'])->name('organisasi.index');

Route::get('/artikels', [ArtikelController::class, 'index'])->name('artikels.index');
Route::get('/artikels/create', [ArtikelController::class, 'create'])->middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->name('artikels.create');
Route::post('/artikels', [ArtikelController::class, 'store'])->middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->name('artikels.store');
Route::get('/artikels/{slug}', [ArtikelController::class, 'show'])->name('artikels.show');

Route::middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->group(function () {

    Route::resource('organisasi', OrganisasiController::class)->except(['index']);

    Route::resource('sejarah', SejarahController::class)->except(['show', 'index']);

    Route::resource('instansi', InstansiController::class);

    // Removed 'create' and 'store' from resource route to define explicitly with middleware above
    Route::resource('artikels', ArtikelController::class)->except(['index', 'show', 'create', 'store']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

// Remove or redirect /dashboard route
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
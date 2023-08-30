<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Cviebrock\EloquentSluggable\Services\SlugService;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class , 'index']);

Route::get('pendidikan', function () {
    return view('pages.pendidikan', [
        'title' => 'pendidikan',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Accusantiumratione quiaquasi quibusdam
        laborum, illo beatae tempora, hic ipsa laudantium saepe cupiditate harum, deleniti quos dolor
        dolorum
        commodi sint amet magni eos rerum eius reiciendis maiores facere. Illum, necessitatibus neque!'
    ]);
});

Route::get('news', [PostController::class, 'index']);
Route::get('post', [PostController::class, 'index']);

Route::get('news/{post:slug}', [PostController::class, 'show']);

Route::get('categories', [CategoryController::class, 'index']);

Route::get('dashboard', function () {
    return view('dashboard.dashboard', [
        'title' => 'dashboard',
        'posts' => Post::where('user_id', auth()->user()->id)->get()
    ]);
})->middleware('auth');
// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('/dashboard/posts', DashboardController::class)->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::post('/dashboard/posts/create', function () {
    App\Models\Post::create(['title' => request('title')]);
    return redirect()->back();
});
Route::get('check_slug', function () {
    $slug = SlugService::createSlug(App\Models\Post::class, 'slug', request('title'));
    return response()->json(['slug' => $slug]);
});

Route::view('struktur-organisasi', 'pages.organisasi', ['title' => 'Organisasi']);
Route::view('proker-organisasi', 'pages.prokerOrganisasi', ['title' => 'Proker Organisasi']);

require __DIR__ . '/auth.php';

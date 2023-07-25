<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.home', [
        'descriptions' => ['Lorem ipsum dolor sit amet consectetur adipisicing elit.Accusantiumratione quiaquasi quibusdam
        laborum, illo beatae tempora, hic ipsa laudantium saepe cupiditate harum, deleniti quos dolor
        dolorum
        commodi sint amet magni eos rerum eius reiciendis maiores facere. Illum, necessitatibus neque!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Accusantiumratione quiaquasi quibusdam
        laborum, illo beatae tempora, hic ipsa laudantium saepe cupiditate harum, deleniti quos dolor
        dolorum
        commodi sint amet magni eos rerum eius reiciendis maiores facere. Illum, necessitatibus neque!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Accusantiumratione quiaquasi quibusdam
        laborum, illo beatae tempora, hic ipsa laudantium saepe cupiditate harum, deleniti quos dolor
        dolorum
        commodi sint amet magni eos rerum eius reiciendis maiores facere. Illum, necessitatibus neque!'],
        'titles' => ['Pendidikan', 'Penelitian', 'Pengabdian'],
    ]);
});

Route::get('pendidikan', function () {
    return view('pages.pendidikan', [
        'title' => 'pendidikan',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Accusantiumratione quiaquasi quibusdam
        laborum, illo beatae tempora, hic ipsa laudantium saepe cupiditate harum, deleniti quos dolor
        dolorum
        commodi sint amet magni eos rerum eius reiciendis maiores facere. Illum, necessitatibus neque!'
    ]);
});

Route::get('news', function () {
    return view('pages.news', [
        'title' => 'berita'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

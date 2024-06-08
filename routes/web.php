<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Logo;
use Illuminate\Support\Facades\Route;
use Cviebrock\EloquentSluggable\Services\SlugService;
use GuzzleHttp\Middleware;
use Illuminate\Routing\Route as RoutingRoute;

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
Route::get('/laravel', [HomeController::class , 'laravel']);

Route::get('pendidikan', function () {
    return view('pages.pendidikan', [
        'title' => 'pendidikan',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.Accusantiumratione quiaquasi quibusdam
        laborum, illo beatae tempora, hic ipsa laudantium saepe cupiditate harum, deleniti quos dolor
        dolorum
        commodi sint amet magni eos rerum eius reiciendis maiores facere. Illum, necessitatibus neque!'
    ]);
});

Route::get('news', [PostController::class, 'index'])->name('posts.index');
Route::get('post', [PostController::class, 'index']);

Route::get('news/{post:slug}', [PostController::class, 'show']);
// Route::get('/user/{slug}', 'UserController@show')->name('user.show');


Route::get('categories', [CategoryController::class, 'index']);


Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
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

Route::middleware(['auth', 'role:admin'])->group(function () {
    //logo
    Route::resource('/dashboard/logos', LogoController::class, ['except' => ['show','delete','edit']]);
    //category
    Route::resource('/dashboard/categories', AdminCategoryController::class, ['except' => ['show']]);
    Route::get('/dashboard/categories/{category:slug}/edit', [AdminCategoryController::class, 'edit'])->name('category.edit');
    Route::put('/dashboard/categories/{category:slug}', [AdminCategoryController::class, 'update'])->name('category.update');
    Route::delete('/dashboard/categories/{category:slug}', [AdminCategoryController::class, 'destroy'])->name('category.destroy');
    //user
    Route::resource('dashboard/users', UserController::class, ['except' => ['edit']]);
    Route::get('/dashboard/users/{user:slug}/show', [UserController::class, 'show'])->name('userdetail.show');
    Route::delete('/dashboard/users/{user:slug}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('/dashboard/users/{post:slug}/edit', 'DashboardPostController@edit')->name('dashboard.posts.edit');
});

Route::get('tentang-kami', function (Request $request) {
    $cari = $request->query('cari');
    if (!empty($cari)) {
        $searchResults = Post::where('title', 'like', '%' . $cari . '%')
            ->paginate(10)
            ->appends(['cari' => $cari]);
    } else {
        $searchResults = null; // Tambahkan ini untuk memastikan variabel ada walaupun tidak ada hasil pencarian
    }
    return view('pages.tentangkami', [
        'title' => 'tentang kami',
        'logos' => Logo::all(),
        'cari' => $cari,
        'posts' => $searchResults ? $searchResults : Post::with(['author', 'category'])->latest()->get(),

    ]);
});

Route::get('pengurus', function (Request $request) {
    $cari = $request->query('cari');
    if (!empty($cari)) {
        $searchResults = Post::where('title', 'like', '%' . $cari . '%')
            ->paginate(10)
            ->appends(['cari' => $cari]);
    } else {
        $searchResults = null; // Tambahkan ini untuk memastikan variabel ada walaupun tidak ada hasil pencarian
    }
    return view('pages.pengurus', [
        'title' => 'pengurus',
        'logos' => Logo::all(),
        'cari' => $cari,
        'posts' => $searchResults ? $searchResults : Post::with(['author', 'category'])->latest()->get(),
    ]);
});

Route::get('kementrian', function (Request $request) {
    $cari = $request->query('cari');
    if (!empty($cari)) {
        $searchResults = Post::where('title', 'like', '%' . $cari . '%')
            ->paginate(10)
            ->appends(['cari' => $cari]);
    } else {
        $searchResults = null; // Tambahkan ini untuk memastikan variabel ada walaupun tidak ada hasil pencarian
    }
    return view('pages.kementrian', [
        'title' => 'kementrian',
        'logos' => Logo::all(),
        'cari' => $cari,
        'posts' => $searchResults ? $searchResults : Post::with(['author', 'category'])->latest()->get(),
    ]);
});

Route::get('kementrian/sekretaris', function (Request $request) {
    $cari = $request->query('cari');
    if (!empty($cari)) {
        $searchResults = Post::where('title', 'like', '%' . $cari . '%')
            ->paginate(10)
            ->appends(['cari' => $cari]);
    } else {
        $searchResults = null; // Tambahkan ini untuk memastikan variabel ada walaupun tidak ada hasil pencarian
    }
    return view('pages.kementrian.sekretaris', [
        'title' => 'Sekretaris',
        'logos' => Logo::all(),
        'cari' => $cari,
        'posts' => $searchResults ? $searchResults : Post::with(['author', 'category'])->latest()->get(),
    ]);
});
Route::get('category/{category:slug}', [PostController::class, 'getPostsByCategory'])->name('categories.posts');
Route::get('user/{user:slug}', [PostController::class, 'getPostsByUser'])->name('users.posts');

// Route::get('user/{user:slug}', [UserController::class, 'getPostsByUser'])->name('users.posts');




require __DIR__ . '/auth.php';

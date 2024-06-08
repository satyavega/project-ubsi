<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Logo;
use App\Models\Tag;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Post $post)
    {
    $cari = $request->query('cari');
    if (!empty($cari)) {
        $searchResults = Post::where('title', 'like', '%' . $cari . '%')
            ->paginate(10)
            ->appends(['cari' => $cari]);
    } else {
        $searchResults = null; // Tambahkan ini untuk memastikan variabel ada walaupun tidak ada hasil pencarian
    }
        $logos = Logo::all();
            return view('pages.home', compact('logos'), [
                'posts' => $post::take(4)->get(),
                'title' => 'Home',
                'cari' => $cari,
            ]);
    }

    public function laravel(){
        return view('welcome');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}

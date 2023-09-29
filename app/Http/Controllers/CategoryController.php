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

use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Category $category, Request $request)
    {
        $cari = $request->query('cari');
    if (!empty($cari)) {
        $searchResults = Post::where('title', 'like', '%' . $cari . '%')
            ->paginate(10)
            ->appends(['cari' => $cari]);
    } else {
        $searchResults = null; // Tambahkan ini untuk memastikan variabel ada walaupun tidak ada hasil pencarian
    }
        return view('categories', [
            'title' => "Category",
            'categories' => $category->all(),
        'logos' => Logo::all(),
        'cari' => $cari,
        'posts' => $searchResults ? $searchResults : Post::with(['author', 'category'])->latest()->get(),


        ]);
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
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category, Request $request)
    {
        $cari = $request->query('cari');
        if (!empty($cari)) {
            $searchResults = Post::where('title', 'like', '%' . $cari . '%')
                ->paginate(10)
                ->appends(['cari' => $cari]);
        } else {
            $searchResults = null; // Tambahkan ini untuk memastikan variabel ada walaupun tidak ada hasil pencarian
        }
        return view('pages.news', [
            'title' => "Posts By Category: " . $category->name,
            'posts' => $category->posts->load('category', 'author'),
            'logos' => Logo::all(),
            'cari' => $cari,
            'posts' => $searchResults ? $searchResults : Post::with(['author', 'category'])->latest()->get(),



        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

    }
}

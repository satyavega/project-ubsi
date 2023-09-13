<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\PostTag;
use App\Models\User;
use Illuminate\Http\Request;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "News";
        $category = request('category');
        $author = request('author');
        // Error
        $latestPosts = Post::with(['author', 'category'])->latest()->take(4)->get();
        $categories = Category::all();

        if ($category) {
            $category = Category::where('slug', $category)->first();
            $title = "Posts By Category: " . $category->name;
        } elseif ($author) {
            $author = User::where('username', $author)->first();
            $title = "Posts By Author: " . $author->name;
        }

        $categoryPosts = [];
        foreach ($categories as $category) {
            $categoryPosts[$category->id] = Post::where('category_id', $category->id)
                ->with(['author', 'category'])
                ->latest()
                ->take(3) // Ambil 3 post dari setiap kategori
                ->get();
        }

        return view('pages.news', [
            'title' => $title,
            'posts' => Post::with(['author', 'category',])->latest()->get(),
            'latestPosts' => $latestPosts,
            // latest()->filter(request(['search', 'category', 'author']))
            //     ->paginate(7)->withQueryString()
            'categories' => $categories,
            'categoryPosts' => $categoryPosts,
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
    public function store(Request $request)
    {
        //
    }



    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('pages.post', [
            "title" => "Single Post",
            "post" => $post
        ]);
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
    public function update(UpdatePostRequest $request, Post $post)
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

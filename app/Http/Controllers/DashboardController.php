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
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // public function home(Post $post)
    // {
    //     return view('dashboard.dashboard', [
    //         'title' => 'dashboard',
    //         'posts' => $post::where('user_id', auth()->user()->id)->get()
    //     ]);
    // }

    public function index(Post $post)
    {
        return view('dashboard.posts.index', [
            'title' => 'Dashboard',
            'posts' => $post::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'title' => 'Create post',
            'categories' => Category::all(),
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     try {
    //         // Validasi request
    //         $validatedData = $request->validate([
    //             'title' => 'required|min:8|max:50',
    //             'slug' => 'required',
    //             'excerpt' => 'required|min:8',
    //             'body' => 'required',
    //             'category_id' => 'required|numeric',
    //             'tag_ids.*' => 'required|numeric',
    //             'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    //         ]);

    //         $post = Post::create([
    //             'title' => $validatedData['title'],
    //             'slug' => $validatedData['slug'],
    //             'excerpt' => $validatedData['excerpt'],
    //             'body' => $validatedData['body'],
    //             'category_id' => $validatedData['category_id'],
    //         ]);

    //         if ($request->hasFile('image')) {
    //             $imagePath = $request->file('image')->store('posts');
    //             $post->image = '/storage/'.$imagePath;
    //             $post->save();
    //         }

    //         $post->tags()->attach($validatedData['tag_ids']);

    //         return redirect('/dashboard/posts')->with('success', 'Posts has been added!');
    //     } catch (\Throwable $th) {
    //         return redirect('/dashboard/posts')->with('error', 'Post cannot be!');
    //     }
    // }
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|min:8|max:50',
            'slug' => '',
            'excerpt' => 'required|min:8',
            'body' => 'required',
            'category_id' => 'required|numeric',
            'tag_ids.*' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        // Upload image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('posts', 'public');
        } else {
            $imagePath = null;
        }

        // Create post
        $user = Auth::user(); // Mengambil pengguna yang sedang masuk
        $post = Post::create([
            'title' => $validatedData['title'],
            'slug' => $validatedData['slug'],
            'excerpt' => $validatedData['excerpt'],
            'body' => $validatedData['body'],
            'category_id' => $validatedData['category_id'],
            'image' => $imagePath ? '/storage/' . $imagePath : null,
            'user_id' => $user->id, // Menyertakan user_id dari pengguna yang sedang masuk
        ]);


        // Attach tags
        $post->tags()->attach($validatedData['tag_ids']);

        return redirect('/dashboard/posts')->with('success', 'Post has been added!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        if ($post->author->id !== auth()->user()->id) {
            abort(403);
        }

        return view('dashboard.posts.show', [
            'post' => $post,
            'title' => 'detail post'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        if ($post->author->id !== auth()->user()->id) {
            abort(403);
        }

        return view('dashboard.posts.edit', [
            'title' => 'Edit post',
            'post' => $post,
            'categories' => Category::all(),
            'tags' => Tag::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => ['required', 'max:255'],
            'image' => ['image', 'file', 'max:20000'],
            'category_id' => ['required'],
            'body' => ['required'],
            'tag_ids' => ['array'],
        ];


        if ($request->slug != $post->slug) {
            $rules['slug'] = ['unique:posts'];
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($post->image != null) Storage::delete($post->image);
            $validatedData['image'] = $request->file('image')->store('posts');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 200));

        Post::where('id', $post->id)->update($validatedData);
        $post->tags()->sync($request->tag_ids);

        return redirect('/dashboard/posts')->with('success', 'Posts has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }

        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Posts has been deleted!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Category;
use App\Models\Logo;
use App\Models\PostTag;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Post $post)
    {
        return view('dashboard.posts.index', [
            'title' => 'Dashboard',
            'posts' => $post::where('user_id', auth()->user()->id)->get(),
            'logos' => Logo::all()

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
            'tags' => Tag::all(),
            'logos' => Logo::all()

        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|min:8|max:255',
            'slug' => '',
            'excerpt' => 'required|min:8',
            'body' => 'required',
            'category_id' => 'required|numeric',
            'tag_ids' => 'required|array',
            'tag_ids.*' => 'numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        // Upload image
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'posts/' . $image->getClientOriginalName();
            $image->storeAs('posts', $image->getClientOriginalName(), 'public');
        }

        // Create post
        $user = Auth::user();
        $post = Post::create([
            'title' => $validatedData['title'],
            'slug' => $validatedData['slug'],
            'excerpt' => $validatedData['excerpt'],
            'body' => $validatedData['body'],
            'category_id' => $validatedData['category_id'],
            'image' => $imagePath,
            'user_id' => $user->id,
        ]);

        foreach ($validatedData['tag_ids'] as $tag_id) {
            PostTag::create([
                'post_id' => $post->id,
                'tag_id' => $tag_id,
            ]);
        }

        return redirect('/dashboard/posts')->with('success', 'Post has been added!');
    }



    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {

        return view('dashboard.posts.show', [
            'post' => $post,
            'title' => 'detail post',
            'logos' => Logo::all()

        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        if (auth()->user()->role === 'admin') {
            return view('dashboard.posts.edit', [
                'title' => 'Edit post',
                'post' => $post,
                'categories' => Category::all(),
                'tags' => Tag::all(),
            'logos' => Logo::all()

            ]);
        }

        if ($post->user->id === auth()->user()->id) {
            return view('dashboard.posts.edit', [
                'title' => 'Edit post',
                'post' => $post,
                'categories' => Category::all(),
                'tags' => Tag::all(),
            'logos' => Logo::all()
            ]);
        }

        abort(403);
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

        if ($request->hasFile('image')) {
            if ($post->image != null) {
                Storage::delete('public/' . $post->image);
            }

            $image = $request->file('image');
            $imagePath = 'posts/' . $image->getClientOriginalName();
            $image->storeAs('posts', $image->getClientOriginalName(), 'public');
            $validatedData['image'] = $imagePath;
        }

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body, 200));

        $post->update($validatedData);

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

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Logo;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usersWithPostCount = User::where('role', 'user')
        ->withCount('posts as posts_count')
        ->get();

    return view('dashboard.admin.users.index', [
        'title' => 'Users',
        'users' => $usersWithPostCount,
        'logos' => Logo::all()

    ]);
    }
    /**
     * menampilkan postingan berdasarkan user
     */
    public function getPostsByUser(User $author)
    {
        $posts = $author->posts;

        return view('pages.news.user', compact('posts'), [
            "title" => "User Posts",
            'logos' => Logo::all()

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
    public function show(User $user)
    {
            $posts = Post::where('user_id', $user->id)->get();
            return view('dashboard.admin.users.show', [
                'title' => "Detail User's Posts",
                'posts' => $posts,
                'user' => $user, // Pass the specific user to the view
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}

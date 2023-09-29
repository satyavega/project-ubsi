<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use App\Models\Logo;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

public function index(Post $post)
{
    $totalPosts = Post::count();
    $totalUsers = User::where('role', 'user')->count();
    $users = User::all();

    return view('dashboard.dashboard', [
        'title' => 'dashboard',
        'posts' => $post::where('user_id', auth()->user()->id)->get(),
        'totalUsers' => $totalUsers,
        'title' => 'Dashboard',
        'totalPosts' => $totalPosts,
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
    public function store(Request $request){

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

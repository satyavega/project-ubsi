<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

public function index(Post $post)
{
    $totalUsers = User::where('role', 'user')->count(); // Menghitung total user dengan peran 'user'

    return view('dashboard.dashboard', [
        'title' => 'dashboard',
        'posts' => $post::where('user_id', auth()->user()->id)->get(),
        'totalUsers' => $totalUsers, // Kirim total user ke tampilan
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

<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Logo $logo)
    {
        return view('dashboard.admin.logos.index', [
            'title' => 'Dashboard',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.logos.create', [
            'title' => 'Create logo',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        $validatedData = $request->validate([
            'image_name' => 'required|min:8|max:50'
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'logos/' . $image->getClientOriginalName();
            $image->storeAs('logos', $image->getClientOriginalName(), 'public');
        }
        $logo = Logo::create([
            'image_name' => $validatedData['image_name'],
            'image' => $imagePath,
        ]);

        return redirect('/dashboard/logos')->with('success', 'Logo has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Logo $logo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logo $logo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logo $logo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logo $logo)
    {
        //
    }
}

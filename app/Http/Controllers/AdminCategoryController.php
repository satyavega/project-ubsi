<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Logo;

use \Cviebrock\EloquentSluggable\Services\SlugService;


class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if(auth()->guest()){
            abort(403);
        }
        return view('dashboard.admin.categories.index', [
            'categories' => Category::all(),
            'title' => 'Category Admin',
        'logos' => Logo::all()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.categories.create', [
            'title' => 'Create Category',
            'categories' => Category::all(),
        'logos' => Logo::all()


        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|min:4|max:50',
            'slug' => '',
        ]);
        $category = Category::create([
            'name' => $validatedData['name'],
            'slug' => $validatedData['slug'],
        ]);
        return redirect('/dashboard/categories')->with('success', 'Category has been added!');
    }
        //

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
{

    return view('dashboard.admin.categories.edit', [
        'name' => 'Edit category',
        'category' => $category,
        'title' => 'Edit Category',
        'logos' => Logo::all()

    ]);
}

public function update(Request $request, Category $category)
{
    $rules = [
        'name' => ['required', 'max:255'],
        'slug' => ['required', 'unique:categories,slug,' . $category->id],
    ];

    $validatedData = $request->validate($rules);
    $category->update($validatedData);

    return redirect('/dashboard/categories')->with('success', 'Category has been updated!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Category::destroy($category->id);

        return redirect('/dashboard/categories')->with('success', 'Category has been deleted!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}

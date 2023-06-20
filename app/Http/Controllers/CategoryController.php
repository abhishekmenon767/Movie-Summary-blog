<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.posts.add-category');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',

            'slug' => ['required', Rule::unique('categories', 'slug')],

        ]);

        $categories = new Category();
        $categories->name = $request->name;
        $categories->slug = $request->slug;
        $categories->save();
        return redirect()->route('category.create')->with('success', 'Category created successfully!');

    }
}

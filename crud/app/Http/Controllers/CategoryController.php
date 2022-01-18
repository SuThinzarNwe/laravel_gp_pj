<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Category::create([
            'title' => request('title'),
            'content' => request('content')
        ]);

        return redirect('/categories');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', ['category' => $category]);
    }

    public function update(Category $category)
    {
        request()->validate([
            'id' => 'required',
            'name' => 'required',
        ]);

        $category->update([
            'id' => request('id'),
            'name' => request('name'),
        ]);

        return redirect('/categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/categories');
    }
}

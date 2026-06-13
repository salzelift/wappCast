<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CategoryController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $categories = Category::withCount('blogs')->get();
        return view('admin.content.categories', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $category =  new CategoryResource(Category::create($request->validated()));

        return redirect()->route('admin.content.category-show', $category);
    }

    public function show(Category $category)
    {
        $blogs = $category->blogs()->paginate(10);
        return view('admin.content.category-show', compact('category', 'blogs'));
    }

    public function edit(Category $category)
    {
        return view('admin.content.category-form', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()->route('admin.content.category-show', $category);
    }

    public function destroy(Category $category)
    {

        $category->delete();

        return redirect()->route('admin.content.categories');
    }
}

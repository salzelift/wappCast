<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    use AuthorizesRequests;

    private function deleteImage(?string $path): void
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }

    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.content.blogs', compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.content.blog-form', compact('categories'));
    }

    public function store(BlogRequest $request)
    {
        $data = $request->validated();
        $data['image_url'] = $request->file('image')->store('public');
        Blog::create($data);
        return redirect()->route('admin.content.blogs')->with('success', 'Blog created successfully');
    }

    public function show(Blog $blog)
    {
        return view('admin.content.blog-show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('admin.content.blog-form', compact('blog', 'categories'));
    }

    public function update(BlogRequest $request, Blog $blog)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $this->deleteImage($blog->image_url);
            $data['image_url'] = $request->file('image')->store('public');
        } elseif ($request->boolean('remove_image')) {
            $this->deleteImage($blog->image_url);
            $data['image_url'] = null;
        }

        $blog->update($data);

        return redirect()->route('admin.content.blogs')->with('success', 'Blog updated successfully');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.content.blogs')->with('success', 'Blog deleted successfully');
    }
}

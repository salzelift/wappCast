<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use AuthorizesRequests;

    private function deleteImage(?string $path): void
    {
        if ($path && Storage::disk("blogs", 'public')->exists($path)) {
            Storage::disk("blogs", 'public')->delete($path);
        }
    }

    public function index()
    {
        $blogs = Blog::with('category')->latest()->paginate(10);
        return view('admin.content.blogs', compact('blogs'));
    }

    public function apiIndex(Request $request)
    {
        $search = $request->query('search');
        $query = Blog::latest();
        if(!empty($search)) {
            $query->where(function ($q) use ($search){
                $q->where('title', 'like', '%'.$search.'%')
                    ->orWhere('content', 'like', '%'.$search.'%')
                    ->orWhere('slug', 'like', '%'.$search.'%')
                    ->orWhere('description', 'like', '%'.$search.'%')
                    ->orWhereJsonContains('tags', $search);
            });
        }
        $blogs = $query->paginate(10);
        return BlogResource::collection($blogs);
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.content.blog-form', compact('categories'));
    }

    public function store(BlogRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image_url')) {
            $data['image_url'] = $request->file('image_url')->store('blogs', 'public');
        }
        $data['tags'] = array_map('trim', explode(',', $request->tags));
        Blog::create($data);
        return redirect()->route('admin.content.blogs')->with('success', 'Blog created successfully');
    }

    public function show(Blog $blog)
    {
        return view('admin.content.blog-show', compact('blog'));
    }

    public function apiShow(Blog $blog)
    {
        return new BlogResource($blog->load('category'));
    }

    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('admin.content.blog-form', compact('blog', 'categories'));
    }

    public function update(BlogRequest $request, Blog $blog)
    {
        $data = $request->validated();
        if ($request->hasFile('image_url')) {
            $data['image_url'] = $request->file('image_url')->store('blogs', 'public');
        }
        $data['tags'] = array_map('trim', explode(',', $request->tags));

        $blog->update($data);

        return redirect()->route('admin.content.blogs')->with('success', 'Blog updated successfully');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.content.blogs')->with('success', 'Blog deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BlogController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Blog::class);

        return BlogResource::collection(Blog::all());
    }

    public function store(BlogRequest $request)
    {
        $this->authorize('create', Blog::class);

        return new BlogResource(Blog::create($request->validated()));
    }

    public function show(Blog $blog)
    {
        $this->authorize('view', $blog);

        return new BlogResource($blog);
    }

    public function update(BlogRequest $request, Blog $blog)
    {
        $this->authorize('update', $blog);

        $blog->update($request->validated());

        return new BlogResource($blog);
    }

    public function destroy(Blog $blog)
    {
        $this->authorize('delete', $blog);

        $blog->delete();

        return response()->json();
    }
}

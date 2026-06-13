<?php

namespace App\Http\Resources;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Blog */
class BlogResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'time_to_read' => $this->time_to_read,
            'image_url' => $this->image_url,
            'content' => $this->content,
            'tags' => $this->tags,
            'slug' => $this->slug,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,

            'category_id' => $this->category_id,

            'category' => new CategoryResource($this->whenLoaded('category')),
        ];
    }
}

<x-admin-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">

        <div class="flex items-center justify-between mb-6">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">
                    {{ isset($blog) ? 'Edit Blog Post' : 'New Blog Post' }}
                </h1>
                <p class="text-sm text-gray-500 mt-1">
                    {{ isset($blog) ? 'Update the details of this post below.' : 'Fill in the details to publish a new post.' }}
                </p>
            </div>
            <a href="{{ route('admin.content.blogs') }}" class="inline-flex items-center gap-1.5 text-sm font-medium text-gray-600 hover:text-gray-900">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                Back to posts
            </a>
        </div>

        <form action="{{ isset($blog) ? route('admin.content.blog-update', $blog->slug) : route('admin.content.blog-store') }}"
              method="POST" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
            @csrf
            @if(isset($blog))
                @method('PUT')
            @endif

            {{-- MAIN COLUMN --}}
            <div class="lg:col-span-2 space-y-6">

                {{-- Title + Description --}}
                <div class="bg-white shadow-sm border border-gray-200 rounded-xl p-6 space-y-5">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1.5">Blog Title</label>
                        <input type="text" id="title" name="title" value="{{ old('title', $blog->title ?? '') }}" required
                               class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-base font-medium px-4 py-3 @error('title') border-red-300 text-red-900 focus:border-red-500 focus:ring-red-500 @enderror">
                        @error('title') <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1.5">Short Description</label>
                        <textarea id="description" name="description" rows="3" required maxlength="255"
                                  class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm px-4 py-2.5 resize-none @error('description') border-red-300 text-red-900 focus:border-red-500 focus:ring-red-500 @enderror">{{ old('description', $blog->description ?? '') }}</textarea>
                        <p class="mt-1.5 text-xs text-gray-400">
                            <span id="desc_count">0</span>/255 characters &mdash; used for previews and SEO meta description.
                        </p>
                        @error('description') <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>
                </div>

                {{-- Content editor --}}
                <div class="bg-white shadow-sm border border-gray-200 rounded-xl overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200 bg-gray-50/50">
                        <h3 class="text-sm font-semibold text-gray-900">Content</h3>
                    </div>
                    <div class="@error('content') border-2 border-red-300 @enderror">
                        <div id="content_editor">{!! old('content', $blog->content ?? '') !!}</div>
                    </div>
                    <textarea name="content" id="content" class="hidden">{{ old('content', $blog->content ?? '') }}</textarea>
                    @error('content') <p class="px-6 py-2 text-xs text-red-600 border-t border-red-100 bg-red-50">{{ $message }}</p> @enderror
                </div>
            </div>

            {{-- SIDEBAR --}}
            <div class="space-y-6">

                {{-- Publish --}}
                <div class="bg-white shadow-sm border border-gray-200 rounded-xl p-5 space-y-3">
                    <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg shadow-sm transition-colors">
                        {{ isset($blog) ? 'Update Post' : 'Publish Post' }}
                    </button>
                    <a href="{{ route('admin.content.blogs') }}" class="w-full inline-flex items-center justify-center px-4 py-2.5 text-sm font-medium text-gray-700 hover:bg-gray-50 border border-gray-300 rounded-lg shadow-sm transition-colors">
                        Cancel
                    </a>
                </div>

                {{-- Organize --}}
                <div class="bg-white shadow-sm border border-gray-200 rounded-xl p-5 space-y-4">
                    <h3 class="text-sm font-semibold text-gray-900">Organize</h3>

                    <div>
                        <label for="category_id" class="block text-sm font-medium text-gray-700 mb-1.5">Category</label>
                        <select id="category_id" name="category_id" required
                                class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm px-4 py-2.5 @error('category_id') border-red-300 text-red-900 focus:border-red-500 focus:ring-red-500 @enderror">
                            <option value="">Select a category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $blog->category_id ?? '') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id') <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="time_to_read" class="block text-sm font-medium text-gray-700 mb-1.5">Read Time (mins)</label>
                        <input type="number" id="time_to_read" name="time_to_read" value="{{ old('time_to_read', $blog->time_to_read ?? '') }}" required min="1"
                               class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm px-4 py-2.5 @error('time_to_read') border-red-300 text-red-900 focus:border-red-500 focus:ring-red-500 @enderror">
                        @error('time_to_read') <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="slug" class="block text-sm font-medium text-gray-700 mb-1.5">Slug URL</label>
                        <input type="text" id="slug" name="slug" value="{{ old('slug', $blog->slug ?? '') }}" placeholder="auto-generated from title"
                               class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm px-4 py-2.5 @error('slug') border-red-300 text-red-900 focus:border-red-500 focus:ring-red-500 @enderror">
                        <p class="mt-1.5 text-xs text-gray-400">Leave blank to auto-generate from the title.</p>
                        @error('slug') <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="tags" class="block text-sm font-medium text-gray-700 mb-1.5">Tags</label>
                        <input type="text" id="tags" name="tags" placeholder="laravel, php, tailwind"
                               value="{{ old('tags', isset($blog->tags) ? (is_array($blog->tags) ? implode(', ', $blog->tags) : $blog->tags) : '') }}"
                               class="w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm px-4 py-2.5 @error('tags') border-red-300 text-red-900 focus:border-red-500 focus:ring-red-500 @enderror">
                        <p class="mt-1.5 text-xs text-gray-400">Separate keywords with a comma.</p>
                        @error('tags') <p class="mt-1.5 text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>
                </div>

                {{-- Featured Image --}}
                <div class="bg-white shadow-sm border border-gray-200 rounded-xl p-5 space-y-3">
                    <h3 class="text-sm font-semibold text-gray-900">Featured Image</h3>

                    <label for="image" class="block cursor-pointer">
                        <div class="relative aspect-video w-full rounded-lg border-2 border-dashed border-gray-300 bg-gray-50 hover:border-indigo-400 hover:bg-indigo-50/30 transition-colors overflow-hidden flex items-center justify-center">
                            <img id="image_preview"
                                 src="{{ isset($blog) && $blog->image_url ? Storage::url($blog->image_url) : '' }}"
                                 alt="Preview"
                                 class="w-full h-full object-cover {{ isset($blog) && $blog->image_url ? '' : 'hidden' }}">
                            <div id="image_placeholder" class="text-center px-4 {{ isset($blog) && $blog->image_url ? 'hidden' : '' }}">
                                <svg class="w-8 h-8 mx-auto text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                </svg>
                                <p class="mt-2 text-xs text-gray-500">Click to upload an image</p>
                                <p class="text-[11px] text-gray-400 mt-0.5">PNG, JPG or WEBP, up to 2MB</p>
                            </div>
                        </div>
                        <input type="file" id="image" name="image" accept="image/png,image/jpeg,image/jpg,image/webp" class="hidden" {{ isset($blog) ? '' : 'required' }}>
                    </label>
                    @error('image') <p class="text-xs text-red-600">{{ $message }}</p> @enderror

                    @if(isset($blog) && $blog->image_url)
                        <label class="flex items-center gap-2 text-xs text-gray-500">
                            <input type="checkbox" id="remove_image" name="remove_image" value="1" class="rounded border-gray-300 text-red-600 focus:ring-red-500">
                            Remove current image
                        </label>
                    @endif
                </div>

            </div>
        </form>
    </div>

        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
        <style>
            .ql-toolbar.ql-snow {
                border: none;
                border-bottom: 1px solid #e5e7eb;
                background: #f9fafb;
                padding: 10px 16px;
            }
            .ql-container.ql-snow {
                border: none;
                font-size: 0.875rem;
            }
            .ql-editor {
                min-height: 360px;
                padding: 20px 24px;
            }
            .ql-editor.ql-blank::before {
                font-style: normal;
                color: #9ca3af;
                left: 24px;
            }
        </style>

        <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // --- Quill content editor ---
                const quill = new Quill('#content_editor', {
                    theme: 'snow',
                    placeholder: 'Write your blog content here...',
                    modules: {
                        toolbar: [
                            [{ header: [2, 3, false] }],
                            ['bold', 'italic', 'underline', 'strike'],
                            [{ list: 'ordered' }, { list: 'bullet' }],
                            ['blockquote', 'code-block'],
                            ['link', 'image'],
                            [{ align: [] }],
                            ['clean']
                        ]
                    }
                });

                const hiddenContent = document.getElementById('content');
                const form = hiddenContent.closest('form');
                form.addEventListener('submit', function () {
                    hiddenContent.value = quill.root.innerHTML;
                });

                // --- Featured image preview ---
                const imageInput = document.getElementById('image');
                const imagePreview = document.getElementById('image_preview');
                const imagePlaceholder = document.getElementById('image_placeholder');
                const removeImageCheckbox = document.getElementById('remove_image');

                imageInput.addEventListener('change', function () {
                    const file = this.files && this.files[0];
                    if (!file) return;

                    const reader = new FileReader();
                    reader.onload = function (e) {
                        imagePreview.src = e.target.result;
                        imagePreview.classList.remove('hidden');
                        imagePlaceholder.classList.add('hidden');
                    };
                    reader.readAsDataURL(file);

                    if (removeImageCheckbox) removeImageCheckbox.checked = false;
                });

                // --- Description character counter ---
                const descInput = document.getElementById('description');
                const descCount = document.getElementById('desc_count');

                function updateCount() {
                    descCount.textContent = descInput.value.length;
                }
                descInput.addEventListener('input', updateCount);
                updateCount();

                // --- Auto-slug from title (only fills if slug is empty) ---
                const titleInput = document.getElementById('title');
                const slugInput = document.getElementById('slug');

                titleInput.addEventListener('blur', function () {
                    if (slugInput.value.trim() !== '') return;
                    slugInput.value = titleInput.value
                        .toLowerCase()
                        .trim()
                        .replace(/[^a-z0-9\s-]/g, '')
                        .replace(/\s+/g, '-')
                        .replace(/-+/g, '-');
                });
            });
        </script>
</x-admin-layout>

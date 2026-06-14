<x-admin-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-6">
            <a href="{{ route('admin.content.blogs') }}" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 transition-colors">
                &larr; Back to Listings
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
            <div class="lg:col-span-2 bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                <img src="{{ Storage::url($blog->image_url)}}" alt="{{ $blog->title }}" class="w-full h-80 sm:h-96 object-cover bg-gray-100 border-b border-gray-200">

                <div class="p-6 sm:p-10">
                    <h1 class="text-2xl sm:text-3xl font-extrabold text-gray-900 tracking-tight mb-4">
                        {{ $blog->title }}
                    </h1>

                    <p class="text-base sm:text-lg text-gray-500 leading-relaxed font-normal mb-6">
                        {{ $blog->description }}
                    </p>

                    <hr class="border-gray-200 my-6">

                    <div class="prose prose-lg max-w-none
            prose-headings:font-bold
            prose-headings:text-gray-900
            prose-p:text-gray-700
            prose-p:leading-8
            prose-a:text-blue-600
            prose-img:rounded-xl
            prose-pre:bg-gray-900">
                        {!! $blog->content !!}
                    </div>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm space-y-6 lg:sticky lg:top-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wider mb-4">Post Information</h3>
                    <dl class="space-y-3 text-sm">
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <dt class="text-gray-500">Category ID</dt>
                            <dd class="font-medium text-gray-900">{{ $blog->category_id }}</dd>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <dt class="text-gray-500">Reading Time</dt>
                            <dd class="font-medium text-gray-900">{{ $blog->time_to_read }} minutes</dd>
                        </div>
                        <div class="flex justify-between py-2 border-b border-gray-100">
                            <dt class="text-gray-500">Created On</dt>
                            <dd class="font-medium text-gray-900">{{ $blog->created_at->format('M d, Y h:i A') }}</dd>
                        </div>
                        <div class="flex flex-col py-2 space-y-1">
                            <dt class="text-gray-500">Slug Resource</dt>
                            <dd class="font-mono text-xs bg-gray-50 p-1.5 border border-gray-200 rounded text-gray-800 select-all truncate">
                                {{ $blog->slug }}
                            </dd>
                        </div>
                    </dl>
                </div>

                <div>
                    <h3 class="text-sm font-semibold text-gray-900 uppercase tracking-wider mb-3">Tags</h3>
                    <div class="flex flex-wrap gap-1.5">
                        @if(!empty($blog->tags))
                            @foreach(is_array($blog->tags) ? $blog->tags : json_decode($blog->tags, true) as $tag)
                                <span class="inline-flex items-center px-2 py-0.5 text-xs font-medium bg-gray-50 text-gray-600 border border-gray-200 rounded-md">
                                    {{ trim($tag) }}
                                </span>
                            @endforeach
                        @else
                            <span class="text-xs text-gray-400 italic">No tags attached.</span>
                        @endif
                    </div>
                </div>

                <div class="pt-4 border-t border-gray-200 flex flex-col gap-2">
                    <a href="{{ route('admin.content.blog-edit', $blog->slug) }}" class="w-full inline-flex items-center justify-center px-4 py-2 text-sm font-medium border border-gray-300 text-gray-700 bg-white hover:bg-gray-50 rounded-lg shadow-sm transition-colors">
                        Edit This Post
                    </a>

                    <form action="{{ route('admin.content.blog-delete', $blog->slug) }}" method="POST" onsubmit="return confirm('Delete this blog permanently?');" class="w-full">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-2 text-sm font-medium border border-transparent text-white bg-red-600 hover:bg-red-700 rounded-lg shadow-sm transition-colors">
                            Delete This Post
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

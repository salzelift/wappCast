<x-admin-layout>

    <x-slot:title>Blogs listing</x-slot:title>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 tracking-tight">Blog Management</h1>
                <p class="text-sm text-gray-500 mt-1">Overview, edit, and manage your published content.</p>
            </div>
            <a href="{{ route('admin.content.blog-create') }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg shadow-sm transition-colors">
                Create New Blog
            </a>
        </div>

        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 rounded-r-lg shadow-sm text-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow-sm border border-gray-200 rounded-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                    <tr class="bg-gray-50 border-b border-gray-200 text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        <th class="px-6 py-4">Image</th>
                        <th class="px-6 py-4">Blog Details</th>
                        <th class="px-6 py-4">Category</th>
                        <th class="px-6 py-4">Read Time</th>
                        <th class="px-6 py-4">Created At</th>
                        <th class="px-6 py-4 text-right">Actions</th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
                    @forelse($blogs as $blog)
                        <tr class="hover:bg-gray-50/70 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <img src="{{ $blog->image_url }}" alt="{{ $blog->title }}" class="w-16 h-11 object-cover rounded-md bg-gray-100 border border-gray-200 shadow-sm">
                            </td>
                            <td class="px-6 py-4 max-w-xs md:max-w-md">
                                <span class="font-medium text-gray-900 block truncate">{{ $blog->title }}</span>
                                <span class="text-xs text-gray-500 block truncate mt-0.5">{{ $blog->description }}</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="inline-flex items-center px-2.5 py-0.5 text-xs font-medium bg-gray-100 text-gray-800 rounded-md border border-gray-200">
                                        ID: {{ $blog->category_id }}
                                    </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-500">
                                {{ $blog->time_to_read }} mins
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-gray-500">
                                {{ $blog->created_at->format('M d, Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-xs font-medium">
                                <div class="inline-flex items-center space-x-1.5">
                                    <a href="{{ route("admin.content.blog-show", $blog->slug) }}" class="px-2.5 py-1.5 border border-gray-200 text-gray-700 hover:bg-gray-50 rounded-md transition-colors">View</a>
                                    <a href="{{ route('admin.content.blog-edit', $blog->slug) }}" class="px-2.5 py-1.5 border border-amber-200 text-amber-700 bg-amber-50/30 hover:bg-amber-50 rounded-md transition-colors">Edit</a>

                                    <form action="{{ route('admin.content.blog-delete', $blog->slug) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog?');" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-2.5 py-1.5 border border-red-200 text-red-600 bg-red-50/30 hover:bg-red-50 rounded-md transition-colors">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-12 text-center text-gray-500">
                                <p class="text-base font-medium">No blogs found.</p>
                                <p class="text-sm text-gray-400 mt-1">Get started by creating your very first post.</p>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="mt-6">
            {{ $blogs->links() }}
        </div>
    </div>
</x-admin-layout>

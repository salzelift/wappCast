<x-admin-layout>
    <x-slot:title>Category Details - {{ $category->name }}</x-slot:title>

    <div class="mb-6 flex items-center justify-between">
        <a href="{{ route('admin.content.categories') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">&larr; Back to Categories</a>
        <a href="{{ route('admin.content.category-edit', $category->slug) }}" class="text-sm bg-white border border-gray-300 rounded-lg px-3 py-1.5 font-medium shadow-sm hover:bg-gray-50">Edit Category</a>
    </div>

    <div class="bg-slate-900 rounded-xl p-6 text-white mb-8 shadow-sm">
        <span class="text-xs font-mono tracking-wider text-indigo-400 uppercase">Category Identity Folder</span>
        <h1 class="text-3xl font-bold mt-1">{{ $category->name }}</h1>
        <p class="text-slate-400 text-sm mt-2 font-mono">System Slug Endpoint: /content/categories/{{ $category->slug }}</p>
    </div>

    <h2 class="text-lg font-bold text-gray-900 mb-4">Assigned Articles</h2>

    <div class="bg-white shadow-sm ring-1 ring-gray-900/5 rounded-xl overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Blog Title</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Published Date</th>
                <th scope="col" class="relative py-3.5 pl-3 pr-6 text-right text-sm font-medium">Action</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
            @forelse($blogs as $blog)
                <tr class="hover:bg-gray-50/75 transition-colors">
                    <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-semibold text-gray-900">{{ $blog->title }}</td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $blog->created_at->format('M d, Y') }}</td>
                    <td class="whitespace-nowrap py-4 pl-3 pr-6 text-right text-sm font-medium">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Manage</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="py-10 text-center text-sm font-medium text-gray-400">No blog articles linked to this specific category folder yet.</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        <div class="border-t border-gray-200 px-6 py-4 bg-gray-50">
            {{ $blogs->links() }}
        </div>
    </div>
</x-admin-layout>

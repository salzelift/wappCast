<x-admin-layout>
    <x-slot:title>Categories Management</x-slot:title>

    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-8">
        <div>
            <h1 class="text-2xl font-bold tracking-tight text-gray-900">Categories</h1>
            <p class="text-sm text-gray-500 mt-1">Organize your blog posts into distinct structural topics.</p>
        </div>
        <div class="mt-4 sm:mt-0">
            <a href="{{ route('admin.content.category-create') }}" class="inline-flex items-center rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 transition">
                + Add Category
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-lg text-sm">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow-sm ring-1 ring-gray-900/5 rounded-xl overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Category Name</th>
                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Blogs Count</th>
                <th scope="col" class="relative py-3.5 pl-3 pr-6 text-right text-sm font-medium">Actions</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
            @forelse($categories as $category)
                <tr class="hover:bg-gray-50/75 transition-colors">
                    <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm font-semibold text-gray-900">
                        {{ $category->name }}
                    </td>
                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                        {{ $category->blogs_count ?? 0 }} posts
                    </td>
                    <td class="whitespace-nowrap py-4 pl-3 pr-6 text-right text-sm font-medium space-x-3">
                        <a href="{{ route('admin.content.category-show', $category->slug) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                        <a href="{{ route('admin.content.category-edit', $category->slug) }}" class="text-amber-600 hover:text-amber-900">Edit</a>
                        <form action="{{route('admin.content.category-delete', $category->slug)}}" method="post" class="inline cursor-pointer">
                            @csrf
                            <span><button class="text-red-600 hover:text-red-900">Delete</button></span>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="py-12 text-center text-sm font-medium text-gray-400">No categories found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>

        @if(method_exists($categories, 'links') && $categories->hasPages())
            <div class="border-t border-gray-200 px-6 py-4 bg-gray-50">
                {{ $categories->links() }}
            </div>
        @endif
    </div>
</x-admin-layout>

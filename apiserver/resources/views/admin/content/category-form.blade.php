<x-admin-layout>
    <x-slot:title>{{ isset($category) ? 'Edit Category' : 'Create Category' }}</x-slot:title>

    <div class="max-w-2xl mx-auto">
        <div class="mb-6">
            <a href="{{ route('admin.content.categories') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">&larr; Back to Categories</a>
            <h1 class="text-2xl font-bold tracking-tight text-gray-900 mt-2">
                {{ isset($category) ? 'Edit Category Specifications' : 'Create New Structural Category' }}
            </h1>
        </div>

        <div class="bg-white shadow-sm ring-1 ring-gray-900/5 rounded-xl p-6">
            <form action="{{ isset($category) ? route('admin.content.category-update', $category->slug) : route('admin.content.category-store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-sm font-semibold text-gray-700">Category Title Name</label>
                    <input type="text" name="name" value="{{ old('name', $category->name ?? '') }}" required class="mt-1.5 w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700">Slug URL Extension</label>
                    <input type="text" name="slug" value="{{ old('slug', $category->slug ?? '') }}" placeholder="e.g., product-updates" class="mt-1.5 w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
                    <p class="text-xs text-gray-400 mt-1">Leave empty to auto-generate from the category name.</p>
                    @error('slug') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                </div>

                <div class="flex justify-end gap-3 pt-4 border-t border-gray-100">
                    <a href="{{ route('admin.content.categories') }}" class="px-4 py-2 text-sm font-semibold text-gray-700 hover:bg-gray-50 rounded-lg transition">Cancel</a>
                    <button type="submit" class="px-4 py-2 text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 rounded-lg shadow-sm transition">
                        {{ isset($category) ? 'Save Internal Changes' : 'Publish Category' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>

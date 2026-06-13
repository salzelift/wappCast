<x-admin-layout>
    <x-slot:title>Admin Hub - Overview</x-slot:title>

    <div class="mb-8">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900">Let's get started with your content, {{ Auth::user()->name }}!</h1>
        <p class="text-sm text-gray-500 mt-1">Here is a quick overview of your category and blogs !</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex flex-col justify-between hover:shadow-md transition-shadow">
            <div>
                <div class="w-12 h-12 bg-indigo-50 text-indigo-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L22 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-gray-900">Categories Management</h2>
                <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                    View, read, and manage categories of your blogs right here.
                </p>
            </div>

            <div class="mt-6 pt-4 border-t border-gray-50 flex items-center justify-between">
                <span class="text-xs text-slate-400 font-medium uppercase tracking-wider">Categories Engine</span>
                <a href="{{ route('admin.content.categories') }}" class="inline-flex items-center gap-1 text-sm font-semibold text-indigo-600 hover:text-indigo-700 transition-colors">
                    Manage Categories &rarr;
                </a>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex flex-col justify-between hover:shadow-md transition-shadow">
            <div>
                <div class="w-12 h-12 bg-amber-50 text-amber-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-gray-900">Blogs Management</h2>
                <p class="text-gray-500 text-sm mt-2 leading-relaxed">
                    Draft, organize, publish, and delete company blog posts and articles directly to keep your layout fresh.
                </p>
            </div>

            <div class="mt-6 pt-4 border-t border-gray-50 flex items-center justify-between">
                <span class="text-xs text-slate-400 font-medium uppercase tracking-wider">CMS Content</span>
                <a href="{{route('admin.content.blogs')}}" class="inline-flex items-center gap-1 text-sm font-semibold text-amber-600 hover:text-amber-700 transition-colors">
                    Manage Blogs &rarr;
                </a>
            </div>
        </div>

    </div>
</x-admin-layout>

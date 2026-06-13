
<x-admin-layout>
    <x-slot:title>Submissions Dashboard</x-slot:title>

    <div class="max-w-7xl mx-auto py-10">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">Contact Submissions</h1>
                <p class="text-sm text-gray-500 mt-1">Review incoming leads from your company landing page.</p>
            </div>
        </div>

        <div class="bg-white shadow-sm ring-1 ring-gray-900/5 rounded-xl overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="py-3.5 pl-6 pr-3 text-left text-sm font-semibold text-gray-900">Submitted At</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Name</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email Address</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Message</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                @forelse($contacts as $contact)
                    <tr class="hover:bg-gray-50/75 transition-colors">
                        <td class="whitespace-nowrap py-4 pl-6 pr-3 text-sm text-gray-500">
                            {{ $contact->created_at->diffForHumans() }}
                        </td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm font-semibold text-gray-900">
                            {{ $contact->name }}
                        </td>
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-blue-600">
                            <a href="mailto:{{ $contact->email }}" class="hover:underline">{{ $contact->email }}</a>
                        </td>
                        <td class="px-3 py-4 text-sm text-gray-600 max-w-sm truncate hover:text-clip hover:whitespace-normal">
                            {{ $contact->message }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="py-12 text-center text-sm font-medium text-gray-400">
                            No contact submissions received yet.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>

            @if($contacts->hasPages())
                <div class="border-t border-gray-200 px-6 py-4 bg-gray-50">
                    {{ $contacts->links() }}
                </div>
            @endif
        </div>
    </div>
</x-admin-layout>


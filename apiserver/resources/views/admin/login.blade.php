<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Admin Portal Login</h2>

    @if ($errors->any())
        <div class="bg-red-50 text-red-600 p-3 rounded-lg text-sm mb-4">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ url('/admin/login') }}" method="POST" class="space-y-4">
        @csrf <div>
            <label class="block text-sm font-medium text-gray-700">Email Address</label>
            <input type="email" name="email" value="{{ old('email') }}" required class="mt-1 w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" required class="mt-1 w-full p-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none">
        </div>

        <button type="submit" class="w-full bg-indigo-600 text-white p-2.5 rounded-lg font-semibold hover:bg-indigo-700 transition">
            Sign In
        </button>
    </form>
</div>

</body>
</html>

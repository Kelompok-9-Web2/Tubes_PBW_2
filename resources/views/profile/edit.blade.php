<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <title>Profile</title>
    <!-- Add Tailwind CSS if not already included -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen">

    <!-- Navbar -->
    <x-navbar></x-navbar>

    <div class="flex flex-grow bg-gray-100">

        <!-- Sidebar -->
        <div class="w-64 bg-gray-500 text-white flex flex-col p-4">
            <div class="text-lg font-semibold mb-6">Account Settings</div>
            <nav class="space-y-2">
                <a href="show" class="block px-4 py-2 hover:bg-gray-700 rounded">View Profile</a>
                <a href="edit" class="block px-4 py-2 hover:bg-gray-700 rounded">Edit Profile</a>
                <a href="delete" class="block px-4 py-2 hover:bg-gray-700 rounded">Delete Account</a>
            </nav>
        </div>

        <!-- Main content of the page -->
        <div class="flex-grow p-6">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Edit Profile</h2>

            <form action="{{ route('profile.update') }}" method="POST" class="space-y-6">
                @csrf

                <div class="form-group">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                </div>

                <div class="form-group">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="form-group">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500" id="password" name="password">
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500" id="password_confirmation" name="password_confirmation">
                </div>

                <div class="form-group">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                    <input type="text" class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500" id="phone" name="phone" value="{{ old('phone', $user->phone) }}">
                </div>

                <div class="form-group">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <textarea class="w-full mt-1 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-orange-500" id="address" name="address">{{ old('address', $user->address) }}</textarea>
                </div>

                <button type="submit" class="px-6 py-2 bg-orange-500 text-white rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500">Update Profile</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-auto">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Kulineran. Semua hak cipta dilindungi.</p>
            <div class="mt-4">
                <a href="#" class="text-white hover:text-orange-500 mx-2">Tentang Kami</a>
                <a href="#" class="text-white hover:text-orange-500 mx-2">Syarat & Ketentuan</a>
                <a href="#" class="text-white hover:text-orange-500 mx-2">Kebijakan Privasi</a>
            </div>
        </div>
    </footer>

</body>

</html>

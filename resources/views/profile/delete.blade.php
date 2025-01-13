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
        <div class="flex-grow p-4">
            <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Delete Your Account</h2>

                <p class="text-gray-600 mb-6">Are you sure you want to delete your account? This action is irreversible.</p>

                <form action="{{ route('profile.delete') }}" method="POST" onsubmit="return confirm('Are you sure you want to delete your account?');">
                    @csrf
                    @method('DELETE')

                    <div class="flex space-x-4">
                        <!-- Delete button -->
                        <button type="submit" class="px-6 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50">
                            Delete Account
                        </button>

                        <!-- Cancel button -->
                        <a href="{{ route('profile.show') }}" class="px-6 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>

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
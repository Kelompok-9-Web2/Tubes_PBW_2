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
<body class="flex flex-col min-h-screen bg-gray-50">

    <!-- Navbar -->
    <x-navbar></x-navbar>

    <div class="flex flex-grow">

        <!-- Sidebar -->
        <div class="w-64 bg-gray-500 text-white flex flex-col p-4">
            <div class="text-lg font-semibold mb-6">Account Settings</div>
            <nav class="space-y-2">
                <a href="show" class="block px-4 py-2 hover:bg-gray-700 rounded">View Profile</a>
                <a href="edit" class="block px-4 py-2 hover:bg-gray-700 rounded">Edit Profile</a>
                <a href="delete" class="block px-4 py-2 hover:bg-gray-700 rounded">Delete Account</a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-grow p-6">
            <!-- View Data Section -->
            <section id="view-data" class="mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Profile Details</h2>
                <div class="bg-white border border-gray-200 shadow-md rounded-lg p-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <p class="text-sm font-medium text-gray-600">Name</p>
                            <p class="text-lg font-semibold text-gray-800">{{ $user->name }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-600">Email</p>
                            <p class="text-lg font-semibold text-gray-800">{{ $user->email }}</p>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-gray-600">Phone</p>
                            <p class="text-lg font-semibold text-gray-800">{{ $user->phone }}</p>
                        </div>
                        <div class="sm:col-span-2">
                            <p class="text-sm font-medium text-gray-600">Address</p>
                            <p class="text-lg font-semibold text-gray-800">{{ $user->address }}</p>
                        </div>
                    </div>
                </div>
            </section>
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

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
</head>
    
    <body class="bg-gray-100">
    <x-navbar></x-navbar>

    <div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-500 text-white flex flex-col">
        <div class="p-4 text-lg font-semibold">Account Settings</div>
        <div class="flex-1">
            <nav class="space-y-2">
                <a href="#view-data" class="block px-4 py-2">View Data</a>
                <a href="profile/edit" class="block px-4 py-2">Riwayat Transaksi</a>
                <a href="#edit-profile" class="block px-4 py-2">Delete Account</a>
            </nav>
        </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
        <!-- View Data Section -->
        <section id="view-data" class="mb-6">
            <h2 class="text-xl font-semibold text-orange-500 mb-4">View Data</h2>
            <div class="bg-white p-4 shadow rounded">
                <p><strong>Name:</strong> John Doe</p>
                <p><strong>Email:</strong> john.doe@example.com</p>
                <p><strong>Phone:</strong> +123 456 7890</p>
                <p><strong>Address:</strong> Los Angeles</p>
            </div>
        </section>

        <!-- Edit Profile Section -->
        <section class="mb-6">
            <h2 class="text-xl font-semibold text-orange-500 mb-4">Edit Profile</h2>
            <div class="bg-white p-4 shadow rounded">
                <form method="">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500">
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="text" id="phone" name="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500">
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700"><Address>Address</Address></label>
                        <input type="text" id="phone" name="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-orange-500 focus:border-orange-500">
                    </div>
                    <button type="submit" class="px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-600">Save Changes</button>
                </form>
            </div>
        </section>
    </div>
</div>


    <footer class="bg-gray-800 text-white py-6">
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
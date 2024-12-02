<x-layout>
    <x-slot:name>{{ $name }}</x-slot:name>
    <x-slot:title>{{ $title }}</x-slot:title>

    <body class="bg-gray-100">

        <!-- Full-width Banner -->
        <div class="w-full relative bg-cover bg-center h-64 sm:h-80 md:h-96" style="background-image: url('https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg');">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white px-4">
                <h1 class="text-3xl md:text-4xl font-bold">Kulineran</h1>
                <p class="text-sm md:text-lg mt-2">Mau cari apa?</p>
                <div class="mt-4 w-full max-w-md">
                    <form class="flex">
                        <input type="text" placeholder="Cari Kuliner" class="flex-grow p-2 rounded-l-md focus:outline-none">
                        <button type="submit" class="bg-orange-500 text-white px-4 py-2 rounded-r-md hover:bg-orange-600">Search</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="container mx-auto my-6 px-4">
            <div class="flex flex-wrap space-x-7 justify-center gap-4 sm:gap-6 md:gap-8">
                <button class="bg-orange-500 text-white px-4 py-2 rounded-full">All</button>
                <button class="border border-gray-300 px-4 py-2 rounded-full hover:bg-gray-100">Jus</button>
                <button class="border border-gray-300 px-4 py-2 rounded-full hover:bg-gray-100">Makanan Berat</button>
                <button class="border border-gray-300 px-4 py-2 rounded-full hover:bg-gray-100">Seafood</button>
                <button class="border border-gray-300 px-4 py-2 rounded-full hover:bg-gray-100">Junk Food</button>
                <button class="border border-gray-300 px-4 py-2 rounded-full hover:bg-gray-100">Teh</button>
            </div>
        </div>

        <!-- Kategori Terlaris -->
        <div class="container mx-auto my-12 px-4">
            <div class="flex flex-wrap items-center lg:flex-row justify-center gap-5">
                <!-- Item Kuliner -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden kuliner-item">
                    <img src="https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg" alt="Kuliner 1" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-bold">$10.00</h5>
                        <p class="text-gray-600 mt-2">Deskripsi singkat makanan.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden kuliner-item">
                    <img src="https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg" alt="Kuliner 2" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-bold">$10.00</h5>
                        <p class="text-gray-600 mt-2">Deskripsi singkat makanan.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden kuliner-item">
                    <img src="https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg" alt="Kuliner 3" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-bold">$10.00</h5>
                        <p class="text-gray-600 mt-2">Deskripsi singkat makanan.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden kuliner-item">
                    <img src="https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg" alt="Kuliner 4" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-bold">$10.00</h5>
                        <p class="text-gray-600 mt-2">Deskripsi singkat makanan.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kuliner Section -->
        <div class="container mx-auto mb-12 px-4">
            <div class="flex flex-wrap items-center lg:flex-row justify-center gap-5">
                <!-- Item Kuliner -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden kuliner-item">
                    <img src="https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg" alt="Kuliner 1" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-bold">$10.00</h5>
                        <p class="text-gray-600 mt-2">Deskripsi singkat makanan.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden kuliner-item">
                    <img src="https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg" alt="Kuliner 2" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-bold">$10.00</h5>
                        <p class="text-gray-600 mt-2">Deskripsi singkat makanan.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden kuliner-item">
                    <img src="https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg" alt="Kuliner 3" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-bold">$10.00</h5>
                        <p class="text-gray-600 mt-2">Deskripsi singkat makanan.</p>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-md overflow-hidden kuliner-item">
                    <img src="https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg" alt="Kuliner 4" class="w-full h-48 object-cover">
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-bold">$10.00</h5>
                        <p class="text-gray-600 mt-2">Deskripsi singkat makanan.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add CSS -->
        <style>
            .kuliner-item {
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            }

            .kuliner-item:hover {
                transform: scale(1.05);
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            }
        </style>
    </body>
</x-layout>

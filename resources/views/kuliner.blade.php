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

    <title>Kuliner</title>
</head>

<body class="bg-gray-100">
    <x-navbar></x-navbar>

    <!-- Full-width Banner -->
    <div class="w-full relative bg-cover bg-center h-64 sm:h-80 md:h-96" style="background-image: url('https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white px-4">
            <h1 class="text-3xl md:text-4xl font-bold">Kulineran</h1>
            <p class="text-sm md:text-lg mt-2">Mau cari apa?</p>
            <div class="mt-4 w-full max-w-md">
                <form class="flex">
                    <input
                        type="search"
                        placeholder="Cari Kuliner"
                        id="search"
                        name="search"
                        class="flex-grow p-2 rounded-l-md focus:outline-none text-black" required>
                    <button
                        type="submit"
                        class="bg-orange-500 text-white px-4 py-2 rounded-r-md hover:bg-orange-600">
                        Search
                    </button>
                </form>
            </div>

        </div>
    </div>

    <div class="container mx-auto my-6 px-4">
        <div class="flex flex-wrap space-x-7 justify-center gap-4 sm:gap-6 md:gap-8">

            <a href="{{url('kuliner', 'all')}}" class="border border-gray-300 px-4 py-2 rounded-full hover:bg-gray-100">All</a>

            @foreach ( $category as $category )

            <a href="{{url('kuliner', $category->name)}}" class="border border-gray-300 px-4 py-2 rounded-full hover:bg-gray-100">{{$category->name}}</a>

            @endforeach
        </div>
    </div>



    <!-- Kuliner Section -->
    <div class="container mx-auto mb-12 px-4 sm:px-6 mt-20 md:px-8 max-w-screen-lg">

        <!-- <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6"> -->
        <div class="flex flex-wrap items-center lg:flex-row justify-center gap-5 ">
            <!-- Item Kuliner -->

            <!-- Jika Data Kosong -->
            @if ($data->isEmpty())
            <div class="text-center text-gray-600 mt-8">
                <h3 class="text-xl font-semibold">Menu tidak tersedia</h3>
                <p class="mt-2">Coba cari dengan kata kunci lain atau Cari melalui Kategori.</p>
            </div>
            @else

            @foreach ( $data as $data )
            <a href="{{ url('detail', $data->id) }}" class="block">
                <div class="bg-white rounded-lg shadow-md overflow-hidden kuliner-item">
                    <img src="../menu_img/{{$data->image}}" alt="" class="custom-img">
                    <div class="p-4 text-center">
                        <h5 class="text-lg font-bold">{{$data->title}}</h5>
                        <p class="text-gray-600 mt-2">{{$data->harga}}</p>
                    </div>
                </div>
            </a>
            @endforeach

            @endif

            <!-- Repeat similar blocks for other culinary items -->
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

        .custom-img {
            width: 280px;
            /* Sesuaikan ukuran */
            height: 192px;
            /* Sesuaikan ukuran */
            object-fit: cover;
            /* Mencegah gambar melar */
        }
    </style>
    <footer class="bg-white-800 text-black py-6">
        <div class="container mx-auto text-center">
            <strong></strong>
            <div class="mt-4">
                <a href="#" class="text-white hover:text-orange-500 mx-2"></a>
                <a href="#" class="text-white hover:text-orange-500 mx-2"></a>
                <a href="#" class="text-white hover:text-orange-500 mx-2"></a>
            </div>
        </div>
    </footer>
    <footer class="bg-white-800 text-black py-6">
        <div class="container mx-auto text-center">
            <strong></strong>
            <div class="mt-4">
                <a href="#" class="text-white hover:text-orange-500 mx-2"></a>
                <a href="#" class="text-white hover:text-orange-500 mx-2"></a>
                <a href="#" class="text-white hover:text-orange-500 mx-2"></a>
            </div>
        </div>
    </footer>
    <footer class="bg-white-800 text-black py-6">
        <div class="container mx-auto text-center">
            <strong></strong>
            <div class="mt-4">
                <a href="#" class="text-white hover:text-orange-500 mx-2"></a>
                <a href="#" class="text-white hover:text-orange-500 mx-2"></a>
                <a href="#" class="text-white hover:text-orange-500 mx-2"></a>
            </div>
        </div>
    </footer>
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
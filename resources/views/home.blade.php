<x-layout>
    <x-slot:name>{{ $name }}</x-slot:name>
    <x-slot:title>{{ $title }}</x-slot:title>

    <body class="bg-gray-100">

        <!-- Full-width Banner -->
        <div class="w-full relative bg-cover bg-center h-64 sm:h-80 md:h-96" style="background-image: url('https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg');">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white px-4">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold">Kulineran</h1>
                <a href="/kuliner/all" class="bg-white text-black px-8 py-4 rounded-full text-lg hover:bg-white transition duration-300 mt-11 transform hover:scale-110">Jelajahi Kuliner</a>
            </div>
        </div>

        <!-- Kategori Terlaris -->
        <div class="container mx-auto my-12 px-4">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-center mb-6">Highlights</h2>
            <div class="flex flex-wrap items-center lg:flex-row justify-center gap-5 ">
                <!-- Item Kuliner -->



               

                </div>
            </div>
        </div>

        <!-- Kuliner Section -->
        <div class="container mx-auto mb-12 px-4 sm:px-6 md:px-8 max-w-screen-lg">
            <h2 class="text-xl sm:text-2xl md:text-3xl font-bold text-center mb-6"></h2>
            <div class="flex flex-wrap items-center lg:flex-row justify-center gap-5 ">
                <!-- Item Kuliner -->

                @foreach ( $data as $data )
                <a href="{{ url('detail', $data->id) }}" class="block">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden kuliner-item">
                        <img src="menu_img/{{$data->image}}" alt="" class="custom-img">
                        <div class="p-4 text-center">
                            <h5 class="text-lg font-bold">{{$data->title}}</h5>
                            <p class="text-gray-600 mt-2">{{$data->harga}}</p>
                        </div>
                    </div>
                </a>
                @endforeach

            </div>
        </div>

        <!-- Add CSS -->
        <style>
            .kuliner-item {
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            }

            .kuliner-item:hover {
                transform: scale(1.05);
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
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

    </body>
</x-layout>
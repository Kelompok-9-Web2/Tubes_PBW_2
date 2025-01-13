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
    <style>
        .product-page-countainer {
            max-width: 1100px;
            width: 90%;
            margin: 30px auto;
            background-color: #ffffff;
            padding: 20px;
        }

        #product-page {
            background-color: #ffffff;
            padding: 30px;
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 20px;
            align-items: start;
        }

        .product-page-img {
            border: 1px solid #f1f1f1;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product-page-img img {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border: none;
        }

        .product-page-details {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .product-page-details strong {
            color: #333333;
            font-size: 1.3rem;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .product-page-details .product-category {
            font-size: 0.9rem;
            color: #535353;
            font-weight: 400;
        }

        .product-page-details .price {
            color: #333333;
            font-size: 1.2rem;
            font-weight: 700;
            margin-top: 10px;
        }

        .product-page-details .desc {
            color: #4b4b4b;
            font-size: 0.9rem;
            background-color: #fcfcfc;
            font-weight: 400;
            padding: 10px;
            border: 1px solid #f7f7f7;
            margin-top: 10px;
        }

        .quantity-selector {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .cart-btns {
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        .cart-btns .buy-now {
            background-color: red;
            color: #ffffff;
            width: 150px;
            height: 40px;
            border-radius: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 0.9rem;
        }
    </style>
</head>

<body class="bg-gray-100">
    <x-navbar></x-navbar>
    <div class="product-page-countainer">
        @foreach ($data as $data)
        <section id="product-page">
            <!-- Image -->
            <div class="product-page-img">
                <img src="../menu_img/{{ $data->image }}">
            </div>
            <!-- Details -->
            <div class="product-page-details">
                <!-- Title -->
                <strong>{{ $data->title }}</strong>
                <span class="product-category">{{ $data->category }}</span>
                <!-- Price -->
                <span class="price">{{ $data->harga }}</span>
                <!-- Details -->
                <p class="desc">{{ $data->detail }}</p>
                <!-- Check Out Button -->
                <div class="cart-btns mt-10">
                    <a href="{{ url('order', $data->id) }}" class="add-cart buy-now">Check Out</a>
                </div>
            </div>
        </section>
        @endforeach
    </div>
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
            <p>Temukan Lebih Banyak Lagi</p>
            <div class="mt-4">
                <a href="/home" class="text-white hover:text-orange-500 mx-2">Kategori Terlaris</a>
                <a href="/kuliner/all" class="text-white hover:text-orange-500 mx-2">Semua Menu</a>
                <a href="/home" class="text-white hover:text-orange-500 mx-2">Highlights</a>
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

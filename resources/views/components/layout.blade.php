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

    <title>{{ $name }}</title>
</head>

<body>
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <div class="min-h-full">
        <x-navbar></x-navbar>

        <main>
            <div class="max-wl ">
                {{ $slot }}
            </div>
        </main>
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
    </div>

   


</body>

</html>
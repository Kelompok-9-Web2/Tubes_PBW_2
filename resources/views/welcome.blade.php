<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Modern</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
</head>
<body class="bg-white text-gray-800">

    <!-- Hero Section with Carousel Banner -->
    <header class="relative bg-orange-500 h-screen">
        <div x-data="{
                currentIndex: 0,
                slides: [
                    { image: 'https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg', title: 'Selamat Datang di Kulineran', subtitle: 'Temukan makanan favoritmu di satu tempat.' },
                    { image: 'https://www.fairmont-jakarta.com/wp-content/uploads/sites/288/2024/01/Korean-night.jpg', title: 'Nikmati Berbagai Kuliner', subtitle: 'Dari makanan lokal hingga internasional.' },
                    { image: 'https://img.inews.co.id/media/1200/files/inews_new/2023/03/28/Ciri_ciri_makanan_kontinental.jpg', title: 'Pesan Sekarang', subtitle: 'Proses pemesanan cepat dan mudah.' }
                ],
                nextSlide() {
                    this.currentIndex = (this.currentIndex + 1) % this.slides.length;
                },
                prevSlide() {
                    this.currentIndex = (this.currentIndex - 1 + this.slides.length) % this.slides.length;
                }
            }"
            x-init="setInterval(() => nextSlide(), 5000)"
            class="w-full h-full">
            
            <!-- Carousel Slides -->
            <div class="absolute inset-0 overflow-hidden">
                <div :style="`background-image: url(${slides[currentIndex].image})`" class="w-full h-full bg-cover bg-center transition duration-500"></div>
            </div>

            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center text-white text-center px-6">
                <div>
                    <h1 class="text-5xl sm:text-7xl font-bold mb-4" x-text="slides[currentIndex].title"></h1>
                    <p class="text-xl sm:text-2xl mb-4" x-text="slides[currentIndex].subtitle"></p>
                    <a href="#register" class="bg-white text-black px-8 py-4 rounded-full text-lg hover:bg-gray-300 transition duration-300 mt-5 transform hover:scale-110">Daftar Sekarang</a>
                </div>
            </div>
            
            <!-- Carousel Navigation -->
            <button @click="prevSlide()" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-orange-500 text-white p-3 rounded-full opacity-50 hover:opacity-100 transition duration-300">
                &#8592;
            </button>
            <button @click="nextSlide()" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-orange-500 text-white p-3 rounded-full opacity-50 hover:opacity-100 transition duration-300">
                &#8594;
            </button>
        </div>
    </header>

    <!-- About Section -->
    <section class="py-12 bg-orange-100">
        <div class="container mx-auto px-6 sm:px-12">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Mengapa Kulineran?</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-xl p-8 hover:bg-orange-200 transform transition duration-500 hover:scale-105">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Pilihan Terbaik</h3>
                    <p class="text-gray-600">Makanan berkualitas dari restoran terbaik dengan harga terjangkau.</p>
                </div>
                <div class="bg-white shadow-lg rounded-xl p-8 hover:bg-orange-200 transform transition duration-500 hover:scale-105">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Cepat & Mudah</h3>
                    <p class="text-gray-600">Proses pemesanan mudah dan cepat, dapat dilakukan di ponsel atau komputer.</p>
                </div>
                <div class="bg-white shadow-lg rounded-xl p-8 hover:bg-orange-200 transform transition duration-500 hover:scale-105">
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Promo Menarik</h3>
                    <p class="text-gray-600">Nikmati promo dan diskon menarik setiap hari.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Developer Profile Section -->
    <section class="py-12 bg-orange-500 text-black">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-8">Tim Pengembang Kami</h2>
            <div class="flex flex-wrap justify-center gap-8">
                <div class="bg-white rounded-xl shadow-xl overflow-hidden transform transition duration-300 hover:scale-105 w-64">
                    <img src="https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg" alt="Developer 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">John Doe</h3>
                        <p class="text-gray-600 mb-4">Web developer yang berfokus pada desain dan pengalaman pengguna.</p>
                        <a href="mailto:john@example.com" class="text-orange-500 hover:text-orange-600">Email Saya</a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-xl overflow-hidden transform transition duration-300 hover:scale-105 w-64">
                    <img src="https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg" alt="Developer 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">John Doe</h3>
                        <p class="text-gray-600 mb-4">Web developer yang berfokus pada desain dan pengalaman pengguna.</p>
                        <a href="mailto:john@example.com" class="text-orange-500 hover:text-orange-600">Email Saya</a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-xl overflow-hidden transform transition duration-300 hover:scale-105 w-64">
                    <img src="https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg" alt="Developer 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">John Doe</h3>
                        <p class="text-gray-600 mb-4">Web developer yang berfokus pada desain dan pengalaman pengguna.</p>
                        <a href="mailto:john@example.com" class="text-orange-500 hover:text-orange-600">Email Saya</a>
                    </div>
                </div>
                <div class="bg-white rounded-xl shadow-xl overflow-hidden transform transition duration-300 hover:scale-105 w-64">
                    <img src="https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg" alt="Developer 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">John Doe</h3>
                        <p class="text-gray-600 mb-4">Web developer yang berfokus pada desain dan pengalaman pengguna.</p>
                        <a href="mailto:john@example.com" class="text-orange-500 hover:text-orange-600">Email Saya</a>
                    </div>
                </div>
                <!-- Duplicate for other developers if needed -->
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section id="register" class="py-12 bg-gray-100 text-center">
        <h2 class="text-3xl font-bold mb-4">Bergabunglah Sekarang</h2>
        <p class="mb-6">Nikmati berbagai keunggulan dan kemudahan dalam mencari kuliner favorit Anda.</p>
        <a href="/register" class="bg-white text-orange-500 px-8 py-4 rounded-full text-lg hover:bg-gray-200 transition duration-300 transform hover:scale-110">Daftar Sekarang</a>
    </section>

    <!-- Footer Section -->
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

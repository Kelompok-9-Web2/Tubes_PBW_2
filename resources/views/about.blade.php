<x-layout>
    <x-slot:name>{{ $name }}</x-slot:name>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="relative w-full h-screen bg-cover bg-center" style="background-image: url('https://asset.kompas.com/crops/fxADh7Paf6GHgE12oj3ke5Y-dN8=/0x0:1000x667/1200x800/data/photo/2021/12/21/61c161511efb8.jpg');">
    <!-- Lapisan redup untuk gambar -->
    <div class="absolute inset-0 bg-black opacity-50"></div>
    
    <!-- Teks di atas gambar -->
    <div class="absolute inset-0 flex items-center justify-center text-center text-white">
        <div>
            <h1 class="text-4xl md:text-6xl font-semibold">About the Developers</h1>
            <p class="text-lg md:text-2xl mt-4">Ini adalah teks yang muncul di atas gambar.</p>
        </div>
    </div>
</div>



    <!-- Developer Profiles Section -->
    <div class="container mx-auto py-16 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-12">
            <!-- Developer 1 -->
            <div class="relative bg-gradient-to-r p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex justify-center mb-4">
                    <img src="https://via.placeholder.com/150" alt="Developer 1" class="w-32 h-32 rounded-full object-cover">
                </div>
                <h3 class="text-2xl font-semibold text-black mb-2">Developer 1</h3>
                <p class="text-black-100">Full-stack developer with a passion for clean code and intuitive UI/UX designs.</p>
            </div>

            <!-- Developer 2 -->
            <div class="relative bg-gradient-to-r p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex justify-center mb-4">
                    <img src="https://via.placeholder.com/150" alt="Developer 1" class="w-32 h-32 rounded-full object-cover">
                </div>
                <h3 class="text-2xl font-semibold text-black mb-2">Developer 1</h3>
                <p class="text-black-100">Full-stack developer with a passion for clean code and intuitive UI/UX designs.</p>
            </div>

            <!-- Developer 3 -->
            <div class="relative bg-gradient-to-r p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex justify-center mb-4">
                    <img src="https://via.placeholder.com/150" alt="Developer 1" class="w-32 h-32 rounded-full object-cover">
                </div>
                <h3 class="text-2xl font-semibold text-black mb-2">Developer 1</h3>
                <p class="text-black-100">Full-stack developer with a passion for clean code and intuitive UI/UX designs.</p>
            </div>

            <!-- Developer 4 -->
            <div class="relative bg-gradient-to-r p-6 rounded-lg shadow-lg hover:scale-105 transform transition-all">
                <div class="flex justify-center mb-4">
                    <img src="https://via.placeholder.com/150" alt="Developer 1" class="w-32 h-32 rounded-full object-cover">
                </div>
                <h3 class="text-2xl font-semibold text-black mb-2">Developer 1</h3>
                <p class="text-black-100">Full-stack developer with a passion for clean code and intuitive UI/UX designs.</p>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="container mx-auto py-16 px-4">
        <h2 class="text-3xl sm:text-4xl font-bold text-center text-gray-900 mb-8">Let's Connect</h2>
        <div class="flex justify-center gap-6">
            <a href="https://linkedin.com" target="_blank" class="text-gray-600 hover:text-indigo-500 transition-colors duration-300">
                <img src="https://img.icons8.com/ios/452/linkedin.png" alt="LinkedIn" class="w-12 h-12">
            </a>
            <a href="https://github.com" target="_blank" class="text-gray-600 hover:text-indigo-500 transition-colors duration-300">
                <img src="https://img.icons8.com/ios/452/github.png" alt="GitHub" class="w-12 h-12">
            </a>
            <a href="mailto:developer@example.com" class="text-gray-600 hover:text-indigo-500 transition-colors duration-300">
                <img src="https://img.icons8.com/ios/452/email.png" alt="Email" class="w-12 h-12">
            </a>
        </div>
    </div>

</x-layout>
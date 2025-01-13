<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
  <script type="text/javascript"
		src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{config('midtrans.client_key')}}"></script>
  <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    <title>Order Menu</title>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="order-container bg-white shadow-md rounded-lg p-6 w-full max-w-md">
        @foreach ($data as $menu)
        <div class="order-content text-center">
            <!-- Image -->
            <div class="order-img mb-4">
                <img src="../menu_img/{{ $menu->image }}" alt="{{ $menu->title }}" class="w-full h-64 object-cover rounded-lg">
            </div>

            <!-- Menu Details -->
            <h1 class="text-2xl font-bold text-gray-800 mb-2">{{ $menu->title }}</h1>
            <p class="text-sm text-gray-600">{{ $menu->category }}</p>
            <p class="text-lg text-gray-800 font-semibold mt-2">Rp {{ $menu->harga}}</p>

            <!-- User Information -->
            <div class="user-details text-left mt-4">
                <p><strong>Nama:</strong> {{ $user->name }}</p>
                <p><strong>Telepon:</strong> {{ $user->phone }}</p>
                <p><strong>Alamat:</strong> {{ $user->address }}</p>
            </div>

            <!-- Action Button -->
            <div class="order-btn mt-6">
                <button class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition" id="pay-button">
                    Order Sekarang
                </button>
            </div>
            <div class="order-btn mt-6">
                <!-- Cancel Button -->
                <a href="{{ url()->previous() }}" class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition">
                    Cancel
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <style>
        .order-container {
            max-width: 400px;
        }
    </style>

<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    var payButton = document.getElementById('pay-button');

    payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{$snapToken}}', {
          onSuccess: function(result){ 
          /* You may add your own implementation here */
          alert("payment success!"); console.log(result);
        },
        onPending: function (result) {
          /* You may add your own implementation here */
          alert("wating your payment!"); console.log(result);
        },
        onError: function (result) {
          /* You may add your own implementation here */
          alert("payment failed!"); console.log(result);
        },
        onClose: function () {
          /* You may add your own implementation here */
          alert('you closed the popup without finishing the payment');
        }
      });
    });
  </script>
    
</body>

</html>
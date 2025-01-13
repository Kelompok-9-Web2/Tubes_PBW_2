<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        table {
            border: 1px solid skyblue;
            margin: auto;
            width: 800px;
        }

        th {
            background: skyblue;
            color: white;
            border: 1px solid white;
            padding: 10px;
            margin: 10px;
        }

        td {
            border: 1px solid white;
            color: white;
            padding: 10px;
        }

        .table-img {
                width: 280px;
                /* Sesuaikan ukuran */
                height: 192px;
                /* Sesuaikan ukuran */
                object-fit: cover;
                /* Mencegah gambar melar */
        }

        
    </style>
</head>

<body>

    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <h1>Semua Transaksi</h1>

                <div>

                    <table>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Phone</th>
                            <th>Alamat</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>

                        @foreach ($order as $order )

                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->name}}</td>
                            <td>{{$order->phone}}</td>
                            <td>{{$order->address}}</td>
                            <td>{{$order->total_price}}</td>
                            <td>{{$order->status}}</td>
                            <td>{{$order->created_at}}</td>
                        </tr>

                        @endforeach

                    </table>

                </div>

            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
</body>

</html>
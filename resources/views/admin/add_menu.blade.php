<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style>
        label {
            display: inline-block;
            width: 200px;
            color: white;
        }

        .div_deg {
            padding: 10px;
        }
    </style>
</head>

<body>

    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <form action="{{url('upload_menu')}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="div_deg">

                        <label for="">Nama Menu</label>
                        <input type="text" name="title" required>

                    </div>

                    <div class="div_deg">

                        <label for="category">Pilih Kategori:</label>
                        <select name="category" required>
                        <option selected disabled>Pilih Kategori</option>
                        @foreach ($data as $data )

                            <option>{{$data->name}}</option>

                        @endforeach
                        </select>


                    </div>



                    <div class="div_deg">

                        <label for="">Details</label>
                        <textarea name="detail" cols="35" rows="8" required></textarea>

                    </div>

                    <div class="div_deg">

                        <label for="">Harga</label>
                        <input type="text" name="harga" required>

                    </div>

                    <div class="div_deg">

                        <label for="">Gambar</label>
                        <input type="file" name="img" required>

                    </div>

                    <div class="div_deg">

                        <input type="Submit" name="Tambah Menu" class="btn btn-warning">

                    </div>

            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
</body>

</html>
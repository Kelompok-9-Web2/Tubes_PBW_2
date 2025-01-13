<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style>
        label
        {
            display:inline-block;
            width: 200px;
            color: white;
        }

        .div_deg
        {
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

                <form action="{{url('upload_category')}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="div_deg">

                        <label for="">Nama Kategori</label>
                        <input type="text" name="name" required>

                    </div>                    

                    <div class="div_deg">

                        <input type="Submit" name="Tambah Kategori" class="btn btn-warning">

                    </div>

            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
</body>

</html>
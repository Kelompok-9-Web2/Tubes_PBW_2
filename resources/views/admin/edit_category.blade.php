<!DOCTYPE html>
<html>

<head>

<base href="/public">
    @include('admin.css')
    <style>
        .div_deg
        {
            padding:10px;
        }
        label
        {
            display:inline-block;
            width: 200px;
        }
    </style>
</head>

<body>

    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

            <h1>Update Menu</h1>

            <form action="{{url('edit_category', $category->id)}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="div_deg">

                        <label for="">Nama Kategori</label>
                        <input type="text" value="{{$category->name}}" name="name" required>

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
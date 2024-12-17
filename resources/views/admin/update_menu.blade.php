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

            <form action="{{url('edit_menu', $menu->id)}}" method="post" enctype="multipart/form-data" >
                @csrf

            <div class="div_deg">
                <label for="">Nama Menu</label>
                <input type="text" name="title" value="{{$menu->title}}">
            </div>

            <div class="div_deg">
                <label for="">Detail</label>
                <input type="text" name="detail" value="{{$menu->detail}}">
            </div>

            <div class="div_deg">
                <label for="">Harga</label>
                <input type="text" name="harga" value="{{$menu->harga}}">
            </div>

            <div class="div_deg">
                <label for="">Current Image</label>
                <img width="150" src="menu_img/{{$menu->image}}" alt="">
            </div>

            <div class="div_deg">
                <label for="">Change Image</label>
                <input type="file" name="image">
            </div>

            <div class="div_deg">
                <input class="btn btn-warning" type="submit"
                value="Update Menu">
            </div>

            </div>
        </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
</body>

</html>
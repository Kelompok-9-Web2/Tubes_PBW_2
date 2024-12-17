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
    
    </style>
</head>

<body>

    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <h1>Semua Menu</h1>

                <div>

                    <table>
                        <tr>
                            <th>Nama Menu</th>
                            <th>Detail</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>

                        @foreach ($data as $data )

                        <tr>
                            <td>{{$data->title}}</td>
                            <td>{{$data->detail}}</td>
                            <td>{{$data->harga}}</td>
                            <td>
                                <img width = "150" src="menu_img/{{$data->image}}" alt="">
                            </td>
                            <td>
                                <a class= "btn btn-danger" onclick="return confirm('Hapus Menu?')" 
                                href="{{url('delete_menu', $data->id)}}">Hapus</a>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{url('update_menu',$data->id)}}">Update</a>
                            </td>
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
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
            text-align: center;
        }

        td {
            border: 1px solid white;
            color: white;
            padding: 10px;
            text-align: center;
        }
    
    </style>
</head>

<body>

    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">

                <h1>Semua Kategori</h1>

                <div>

                    <table>
                        <tr>
                            <th>Kategori</th>
                            <th>Delete</th>
                            
                        </tr>

                        @foreach ($data as $data )

                        <tr>
                            <td>{{$data->name}}</td>
                            <td>
                                <a class= "btn btn-danger" onclick="return confirm('Hapus Kategori?')" 
                                href="{{url('delete_category', $data->id)}}">Hapus</a>
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
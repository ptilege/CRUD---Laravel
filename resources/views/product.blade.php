<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <center>
    <h1>All Product</h1>
    
    <div class="container mt-5">
    <table class="table table-bordered table-rounded">
        <thead>
            <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Delete</th>
            <th>update</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $data)

        <tr>
            <td>{{$data->title}}</td>
            <td>{{$data->description}}</td>
            <td><img height="200" src="product/{{$data->image}}"></td> 
            <td><a onclick="return confirm('are you sure to delete this')" href="{{url('delete_product',$data->id)}}" class="btn btn-danger">Delete</a></td>
            <td><a class="btn btn-warning" href="{{url('update_product',$data->id)}}">Update</a></td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>

    

    </center>

    
        

        

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
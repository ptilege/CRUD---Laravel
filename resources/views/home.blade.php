<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <style type="text/css"> 

        .div_deg{
            padding: 30px;
        }


    </style>   
</head>
<body>
    <center>
        <a class="btn btn-success mt-3" href="{{url('/show_product')}}">Show Products</a>

        <br><br>
    <h1>Add Product</h1>

    <form class="form-control"action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">

    @csrf
        <div class="div_deg mb-3">
            <label class="form-label">Product Title</label>
            <input type="text"  name="title">
        </div>
        <div class="div_deg">
            <label class="form-label">Product Description</label>
            <textarea name="description"></textarea>
        </div>
        <div class="div_deg">
            <label class="form-label">Product Image</label>
            <input type="file" name="image">
        </div>
        <div class="div_deg">           
            <input class="btn btn-primary" type="submit" value="Add Product">
        </div>
    </form>

    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   
</body>
</html>
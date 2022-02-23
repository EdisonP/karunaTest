<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Karuna</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>

<body>
    <h1>Add New Product</h1>
    <div style="text-align: right">
        <a href="{{ url('')}}" class="btn btn-primary pull-right">Home</a>
    </div>

    <div style="padding-left: 50px;">
        <form method="post" action="create">
            @csrf
            <strong>Name:</strong></br>
            <input style="width: 50%;" type="text" name="name" placeholder="Name"></br></br>
            <strong>Price (RM):</strong></br>
            <input style="width: 50%" type="number" name="price" min="0" step='any' placeholder="99.00"></br></br>
            <strong>Detail:</strong></br>
            <textarea style="width: 50%" name="details" rows='5' placeholder="Details"></textarea></br></br>
            <strong>Publish</strong></br>

            <input type="radio" id="published1" name="published" value="0" checked>
            <label for="age1">No</label>
            <input type="radio" id="published2" name="published" value="1">
            <label for="age2">Yes</label>

            </br></br>

            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</body>

</html>
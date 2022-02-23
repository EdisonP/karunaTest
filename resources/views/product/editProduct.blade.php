<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Karuna</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>

<body onload="published()">
    <div style="text-align: right">
        <a href="{{ url('')}}" class="btn btn-primary pull-right">Home</a>
    </div>
    <div style="padding-left: 50px;">
        <form method="post" action="{{ route('products.update', $product->id) }}">
            @csrf
            @method('PATCH')
            <input type="hidden" name="id" value="{{$product['id']}}">
            <strong>Name:</strong></br>
            <input style="width: 50%;" type="text" name="name" value="{{$product['name']}}"></br></br>
            <strong>Price (RM):</strong></br>
            <input style="width: 50%" type="number" name="price" min="0" step='any' value="{{$product['price']}}"></br></br>
            <strong>Detail:</strong></br>
            <textarea style="width: 50%" name="details" rows='5'>{{$product['details']}}</textarea></br></br>
            <strong>Publish</strong></br>
            <!-- checked if db's value equals to corresponding value -->
            @if ($product['published'] === 0)
            <input type="radio" id="published1" name="published" value="0" checked>
            <label for="age1">No</label>
            <input type="radio" id="published2" name="published" value="1">
            <label for="age2">Yes</label>
            @elseif ($product['published'] === 1)
            <input type="radio" id="published1" name="published" value="0">
            <label for="age1">No</label>
            <input type="radio" id="published2" name="published" value="1" checked>
            <label for="age2">Yes</label>
            @endif
            </br></br>

            <button type="submit" class="btn btn-primary">Update Product</button>
        </form>
    </div>
</body>

</html>
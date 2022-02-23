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
    <div style="padding-left: 50px;">
        <h1>Show Product</h1>
        <p><strong>Name:</strong>&nbsp{{$product['name']}}</p> </br>
        <p><strong>Price (RM):</strong>&nbsp{{$product['price']}}</p> </br>
        <p><strong>Detail:</strong>&nbsp{{$product['details']}}</p></br>
        <p><strong>Published:</strong>

            <?php
            if ($product['published'] === 1) {

                echo 'YES';
            } else {
                echo 'NO';
            }
            ?>
        </p></br>

        </br></br>

        <a href="{{ url('')}}" class="btn btn-primary">Home</a>
        </form>
    </div>
</body>

</html>
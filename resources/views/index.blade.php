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
    <div>
        <h1>Laravel</h1>
        <div style="text-align: right">
            <a href="{{ url('addProduct')}}" class="btn btn-primary pull-right">Add Product</a> </br></br>

            <input type="text" id="nameSearch" onkeyup="filterProduct()" placeholder="Search for names..">
        </div>

        <div>
            <table id="productTable" class="table table-striped table-bordered fixed">
                <tr class="center">
                    <th><strong>ID</strong></strong></th>
                    <th><strong>Name</strong></th>
                    <th><strong>Price (RM)</strong></th>
                    <th><strong>Details</strong></th>
                    <th><strong>Publish</strong></th>
                    <th><strong>Actions</strong></th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td>{{$product['id']}}</td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['price']}}</td>
                    <td>{{$product['details']}}</td>
                    @if($product->published=='1')
                    <td>YES</td>
                    @else
                    <td>NO</td>
                    @endif
                    <td>

                        <form action="{{ route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('products.show', $product->id)}}" class="btn btn-primary pull-right">Show</a>
                            <a href="{{ route('products.edit', $product->id)}}" class="btn btn-secondary pull-right">Edit</a>
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    <script>
        function filterProduct() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("nameSearch");
            filter = input.value.toUpperCase();
            table = document.getElementById("productTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>

</html>
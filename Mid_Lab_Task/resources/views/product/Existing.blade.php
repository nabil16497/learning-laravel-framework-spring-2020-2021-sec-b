<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Existing Product</h1>
    <h1>Existing Product No {{$existing}}</h1>

    <table>

        <tr>
            <td>Id</td>
            <td>Product Name</td>
            <td>Category</td>
            <td>Unit Price</td>
            <td>Status</td>
            <td>Action</td>

        </tr>

            @foreach ($exist as $i)
            <tr>
                <td>{{$i['id']}}</td>
                <td>{{$i['product_name']}}</td>
                <td>{{$i['category']}}</td>
                <td>{{$i['unit_price']}}</td>
                <td>{{$i['status']}}</td>
                <td>
                    <a href="{{route('product.exEdit', [$i['id']])}}">Edit</a>
                    <a href="{{route('product.exDelete', [$i['id']])}}">Delete</a>
                    <a href="{{route('product.exShow', [$i['id']])}}">Details</a>
                </td>
            </tr>
            @endforeach     
    </table>
    <br>
    <br>
    <a href="/home"><button>Back</button></a>

</body>
</html>
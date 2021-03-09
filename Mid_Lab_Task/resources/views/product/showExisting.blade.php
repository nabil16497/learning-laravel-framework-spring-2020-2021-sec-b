<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @section('page-info')
    <h1>Show Existing Product</h1>
    
    <h2>Product Id: {{ $data['id'] }}</h2>

    <table style="width:20%">
        <tr>
            <td>Product Name</td>
            <td>{{ $data['product_name'] }}</td>
        </tr>
        <tr>
            <td>Category</td>
            <td>{{ $data['category'] }}</td>
        </tr>
        <tr>
            <td>Unit Price</td>
            <td>{{ $data['unit_price'] }}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>{{ $data['status'] }}</td>
        </tr>
    </table>
    <a href="/system/product_management/existing_products"><button>Back</button></a>
@endsection
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Physical Store</title>
</head>
<body>
    <h1>Physical-Store</h1>

    <h2>Avg Price {{$avg}}</h2>
    <h2>Last seven days sell {{$seven}}</h2>
    <h2>Best selling item {{$max_item}}</h2>

    <a href="/system/sales/physical_store/sales_log"><button>Sales Log</button></a> <br> <br>
    <a href="/home"><button>Back</button></a>
    
        <h2>Last 7 days sells</h2>
        <table>
            <tr>
                <td>Id</td>
                <td>Coustomer Name</td>
                <td>Adress</td>
                <td>Phone</td>
                <td>product Id</td>
                <td>Product name</td>
                <td>Unit Price</td>
                <td>Quantity</td>
                <td>total Price</td>
                <td>Date Sold</td>
                <td>Payment Type</td>
                <td>Status</td>
                <td>Created At</td>
                <td>Updated At</td>
            </tr>
            
                @foreach ($item as $it)
                <tr>
                    <td>{{$it['id']}}</td>
                    <td>{{$it['customer_name']}}</td>
                    <td>{{$it['address']}}</td>
                    <td>{{$it['phone']}}</td>
                    <td>{{$it['product_id']}}</td>
                    <td>{{$it['product_name']}}</td>
                    <td>{{$it['unit_price']}}</td>
                    <td>{{$it['quantity']}}</td>
                    <td>{{$it['total_price']}}</td>
                    <td>{{$it['date_sold']}}</td>
                    <td>{{$it['payment_type']}}</td>
                    <td>{{$it['status']}}</td>
                    <td>{{$it['created_at']}}</td>
                    <td>{{$it['updated_at']}}</td>
                </tr>
                @endforeach
        </table>
   
    <h1>Sell Product</h1>
    <form action="">
        Coustomern name : <input type="text" name="" > <br> <br>
        Adress : <input type="text" name="" > <br> <br>
        Phone : <input type="text" name="" > <br> <br>
        Product Id : <input type="text" name="" > <br> <br>
        Product Name : <input type="text" name="" > <br> <br>
        Unit Price : <input type="text" name="" > <br> <br>
        Quantity : <input type="text" name="" > <br> <br>
        Total Price : <input type="text" name="" > <br> <br>
        Date Sold : <input type="text" name="" > <br> <br>
        Payment Type : <input type="text" name="" > <br> <br>
        Status : <input type="text" name="" > <br> <br>
        <input type="Submit" name="" value="Submit">
    </form>
</body>
</html>
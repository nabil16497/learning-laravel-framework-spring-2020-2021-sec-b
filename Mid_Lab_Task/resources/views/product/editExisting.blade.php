<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
    <h1>Edit Existing Product</h1>
    

    <form method="POST">
    	@csrf
        <table>
            <tr>
                <td>Product Name</td>
                <td><input type="text" name="product_name" value="{{$data['product_name']}}"></td>
            </tr>
            <tr>
                <td>Category</td>
                <td>
                <td>
                <select name='category'>
                    <option value="Laptop"> Laptop </option>
                    <option value="Game"> Game </option>
                    <option value="PC"> PC </option>
                </select>
                </td>
                </td>
            </tr>
            <tr>
                <td>Unit Price</td>
                <td><input type="text" name="unit_price" value="{{ $data['unit_price'] }}"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>
                <td>
                <select name='status'>
                        <option value="existing" > EXISTING </option>
                        <option value="upcoming"   > UPCOMING </option>
                </select>
                </td>
                </td>
            </tr>
            <td><input type="submit" name="submit" value="Update Product"></td>
        </table>
	</form>
	
	<br><br>
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach

    <br>
    <br>
    <a href="/system/product_management/existing_products"><button>Back</button></a>

</body>
</html>
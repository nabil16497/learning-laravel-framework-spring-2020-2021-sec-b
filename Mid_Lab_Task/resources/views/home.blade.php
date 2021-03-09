<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    
	
</head>
<body>
	<h1>Welcome {{$user['username']}} </h1>
    <h2>    Email- {{$user['email']}} <br>
    Status-  {{$user['user_type']}}  </h2>
    
    <a href=""><button>View User</button></a><br><br>
    <a href="system/sales/physical_store"><button>Physical Store</button></a> |
    <a href="system/sales/social_media"><button>Social Media</button></a> |
    <a href="system/sales/ecommerce"><button>Ecommerce Web App</button></a> |

    <a href="system/product_management/existing_products"><button>Existing Products</button></a> |
    <a href="system/product_management/upcoming_products"><button>Upcoming Products</button></a> |
    <a href="system/product_management/add_product"><button>Add Product</button></a> <br><br>
    <a href="/logout"><button>Logout</button></a>
    <br>
    
</body>
</html>
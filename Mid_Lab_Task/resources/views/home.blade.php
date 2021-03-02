<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    
	
</head>
<body>
	<h1>Welcome {{session('username')}} </h1><br>
    <h2>    Email- {{ session('email') }} <br>
    Status-  {{ session('user_type') }}  </h2>
    
    <a href=""><button>View User</button></a> |
    <a href="/logout"><button>Logout</button></a>
    <br>
    
</body>
</html>
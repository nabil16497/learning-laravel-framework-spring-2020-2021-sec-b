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
    <a href="/logout"><button>Logout</button></a>
    <br>
    
</body>
</html>
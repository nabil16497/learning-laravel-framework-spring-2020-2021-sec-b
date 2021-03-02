<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    
	
</head>
<body>
	<h1>Login</h1>
    <form action="" method="POST">
        @csrf
        Email: <input type="text" id="email" name="email"><br><br>
        Password: <input type="password" id="password" name="password"><br><br>
        <input type="submit" name="login" value="Login"> 
    </form><br>
    <a href="/registration"><button>Register</button></a>
        <br>@foreach($errors->all() as $err)
		{{$err}} <br>@endforeach
</body>
</html>
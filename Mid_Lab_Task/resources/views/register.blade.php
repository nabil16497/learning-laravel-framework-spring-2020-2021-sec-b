<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
	<h1>Registration</h1>
    <form action="" method="POST">
        @csrf
        
        Full Name: <input type="text" id="full_name" name="full_name"><br><br>
        Username: <input type="text" id="username" name="username"><br><br>
        Email: <input type="text" id="email" name="email"><br><br>
        Password: <input type="password" id="password" name="password"><br><br>
        Confirm Password: <input type="password" id="confirmpassword" name="confirmpassword"><br><br>
        Company Name: <input type="text" id="company_name" name="company_name"><br><br>
        Phone Number: <input type="text" id="phone" name="phone"><br><br>
        City: <input type="text" id="city" name="city"><br><br>
        Country: <input type="text" id="country" name="country"><br><br>
        <input type="submit" name="register" value="Signup"> 
    </form><br>
    <a href="/login"><button>Login</button></a><br>
    @foreach ($errors->all() as $err)

    {{$err}} <br>
        
    @endforeach
</body>
</html>
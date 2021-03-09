<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Details</title>
</head>
<body>
    <h1>User Details</h1>
    <a href="/home/userlist"><button>Back</button></a>

   
	
        
    <table>
        <tr>
            <td>Username</td>
            <td>{{ $user['username'] }}</td>
        </tr>
        <tr>
            <td>Password</td>
            <td>{{ $user['password'] }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $user['email'] }}</td>
        </tr>
        <tr>
            <td>Type</td>
            <td>{{ $user['type'] }}</td>
        </tr>
    </table>

</body>
</html>
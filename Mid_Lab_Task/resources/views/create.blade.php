  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <h1>Create New user</h1>

    <form method="post">
		@csrf
		<fieldset>
			<h2>Add</h2>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{old('username')}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{old('password')}}"></td>
				</tr>
                <tr>
					<td>Email</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>
						<select name='type'>
							<option value="admin"> ADMIN </option>
							<option value="user"> USER </option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
				</tr>
			</table>
		</fieldset>
	</form>

	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User List</title>
</head>
<body>

    <h1>User list</h1>
    <a href="/home"><button>Back</button></a> |
    <a href="/logout"><button>Logout</button></a>

    <br>

    <table>
        <th>
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Password</td>
            <td>Type</td>
            <td>Action</td>
        </th>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['id'] }}</td>
            <td>{{ $list[$i]['username'] }}</td>
            <td>{{ $list[$i]['email'] }}</td>
            <td>{{ $list[$i]['password'] }}</td>
            <td>{{ $list[$i]['type'] }}</td>
            <td>
                <a href="{{route('home.edit',$list[$i]['id'])  }}"><button>Edit</button></a> |
                <a href="/home/delete/{{ $list[$i]['id'] }}"><button>Delete</button></a> |
                <a href="/home/details/{{ $list[$i]['id'] }}"><button>Details</button></a>
            </td>
        </tr>
        @endfor
    </table>
</body>
</html>
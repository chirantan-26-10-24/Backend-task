<div>
    <h1>User list</h1>
    <!-- {{
        print_r($users);
    }} -->
        <table border="1">
            <tr>
            <td>id</td>
            <td>Name</td>
            <td>email</td>
            <td>phone</td>
            <td>delete</td>
            </tr>
            @foreach ($users as $user)
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->phone}}</td>
            <td><a href="{{URL::to('remove')}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    <!-- Be present above all else. - Naval Ravikant -->
</div>

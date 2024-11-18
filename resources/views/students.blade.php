<div>
    <h1>Students list</h1>
    <a href="{{url('addStudent')}}">Add Students</a>
    <table border="1">
            <tr>
            <td>id</td>
            <td>Name</td>
            <td>email</td>
            <td>batch</td>
            <td>delete</td>
            </tr>
            @foreach ($data as $datas)
            <tr>
            <td>{{$datas->id}}</td>
            <td>{{$datas->name}}</td>
            <td>{{$datas->email}}</td>
            <td>{{$datas->batch}}</td>
            <td><a href="{{url('delete',$datas->id)}}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
</div>

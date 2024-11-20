<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Form</title>
</head>
<body>
    <h1>Add Students</h1>
    <form action="{{url('updateData/'.$student->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div style="padding:10px;">

    <div style="padding:10px;">
    <label>Name</label>
    <input type="text" placeholder="Name" value="{{$student->name}}" name="name">
    </div>

    <div style="padding:10px;">
    <label>Email</label>
    <input type="text" placeholder="Email" value="{{$student->email}}" name="email">
    </div>

    <div style="padding:10px;">
    <label>batch</label>
    <input type="text" placeholder="Batch" value="{{$student->batch}}" name="batch">
    </div>

    <div style="padding:10px;">
    
    <input type="submit">
    </div>

    </form>
</body>
</html>
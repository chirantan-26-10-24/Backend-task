<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student Form</title>
</head>
<body>
    <h1>Add Students</h1>
    <form action="{{url('upload')}}" method="POST">
    @csrf
    <div style="padding:10px;">
    <label>ID</label>
    <input type="text" placeholder="ID" name="id">
    </div>

    <div style="padding:10px;">
    <label>Name</label>
    <input type="text" placeholder="Name" name="name">
    </div>

    <div style="padding:10px;">
    <label>Email</label>
    <input type="text" placeholder="Email" name="email">
    </div>

    <div style="padding:10px;">
    <label>batch</label>
    <input type="text" placeholder="Batch" name="batch">
    </div>

    <div style="padding:10px;">
    
    <input type="submit">
    </div>

    </form>
</body>
</html>

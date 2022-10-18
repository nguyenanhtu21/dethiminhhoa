<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <form method="post" action="/students/update/{{$student->id}}">
            @method('POST')
            @csrf
            <div class="form-group">

                <label for="fullname">Full name</label>
                <input type="text" class="form-control" name="fullname" value="{{ $student->fullname }}" />
            </div>

            <div class="form-group">
                <label for="birthday">Birthday</label>
                <input type="text" class="form-control" name="birthday" value="{{ $student->birthday }}" />
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" name="address" value="{{ $student->address }}" />
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top:20px">Update</button>
        </form>
</body>
</html>

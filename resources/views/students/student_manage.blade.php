
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach hoc sinh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <a class="btn btn-primary" href="">Thêm</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Full name</th>
            <th scope="col">Birthday</th>
            <th scope="col">Addess</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->fullname}}</td>
                <td>{{$student->birthday}}</td>
                <td>{{$student->address}}</td>
                <td>
                    <a href="/students/update/{{$student->id}}" class="btn btn-outline-primary">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>

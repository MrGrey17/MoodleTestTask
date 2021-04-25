<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Courses</title>
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">Courses</span>
        </nav>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Users</a></li>
                <li class="breadcrumb-item"><a href="/courses">Courses</a></li>
            </ol> 
        </nav>
        <table class="table">
            <thead>
                <tr class="table-success">
                    <th scope="col">Course Name:</th>
                    <th scope="col">Format:</th>
                    <th scope="col">Enroled Users:</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses_data as $course)
                <tr class="table-light">
                    <td>{{$course['fullname']}}</td>
                    <td>{{$course['format']}}</td>
                    <td><a href="{{route('users_grades', $course['id'])}}"><button type="button" class="btn btn-success">Check</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
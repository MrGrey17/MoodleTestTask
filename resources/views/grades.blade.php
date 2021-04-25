<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grades of {{$course_name}}</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1">Grades of {{$course_name}}</span>
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
                    <th scope="col">Full Name:</th>
                    <th scope="col">Grade:</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users_grades_data as $user)
                <tr class="table-light">
                    <td>{{$user['userfullname']}}</td>
                    <td>{{$user['tabledata'][2]['grade']['content']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1px">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Score</th>
            <th>teacher_id</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->score }}</td>
                <td>{{ $student->teacher_id }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
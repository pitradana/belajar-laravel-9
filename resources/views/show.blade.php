<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @if ($name == 'Maryanto')
        <p>Hi {{ $name }} </p>
    @else
        <p>Hello {{ $name }}</p>
    @endif

    @for ($i = 0; $i < 10; $i++)
        the current value is {{ $i }};
    @endfor --}}

    <p>Student ID: {{ $student->id }}</p>
    <p>Student Name : {{ $student->name }}</p>
    <p>Student Teacher: {{ $student->teacher->name }}</p>
    <p>
        @foreach ($student->activities as $activity)
            <p>{{ $activity->name }}</p> 
        @endforeach
    </p>
</body>
</html>
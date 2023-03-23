<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ __('welcome to this page!') }}</h1>
    <p>Locale: {{ App::getLocale() }}</p>
    <a href="{{ route('set_locale', 'en')}}">English</a>
    <a href="{{ route('set_locale', 'id')}}">Indonesia</a>
    <br><br>
    @if (Auth::check())
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
        <p>ID: {{ $id }}</p>
        <p>{{__('Name')}}: {{ $user->name }}</p>
        <p>{{__('Email')}}: {{ $user->email }}</p>
        <p>{{__('Role')}}: {{ $user->role }}</p>
    @else
        <a href="{{ route('login') }}">{{__('Login')}}</a>
        <a href="{{ route('register') }}">{{__('Register')}}</a>
    @endif

    <table border="1px">
        <tr>
            <th>Id</th>
            <th>{{__('Name')}}</th>
            <th>{{__('Score')}}</th>
            <th>{{__('Teacher_id')}}</th>
            <th>{{__('Actions')}}</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>
                    <a href="{{route('show', $student->id)}}">{{ $student->name }}</a>
                </td>
                <td>{{ $student->score }}</td>
                <td>{{ $student->teacher_id }}</td>
                <td>
                    <form action="{{route('edit', $student)}}" method="get">
                        @csrf
                        <button type="submit">{{__('Edit')}}</button>
                    </form>
                    <form action="{{route('delete', $student)}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit">{{__('Delete')}}</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{__('Current Page')}}: {{ $students->currentPage() }} <br>
    {{__('Total Data')}}: {{ $students->total() }} <br>
    {{__('Data Per Page')}}: {{ $students->perPage() }} <br>

    {{ $students->links('pagination::bootstrap-4') }}
</body>
</html>
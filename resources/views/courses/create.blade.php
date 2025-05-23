<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <h1>Crear Curso</h1>
        <form action="{{ route('course.store') }}" method="POST">
            @csrf
            <label>Course Number:</label>
            <input type="text" name="course_number"><br>

            <label>day:</label>
            <input type="text" name="day"><br>
            
            <button type="submit">Guardar</button>
        </form>
    @endsection
</body>

</html>
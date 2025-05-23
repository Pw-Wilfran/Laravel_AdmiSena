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
        <h1>Agregar Profesor</h1>
        <form action="{{ route('teacher.store') }}" method="POST">
            @csrf
            <label>Name:</label>
            <input type="text" name="name"><br>

            <label>Email:</label>
            <input type="email" name="email"><br>
            
            <button type="submit">Guardar</button>
        </form>
    @endsection
</body>

</html>
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
        <h1>Crear Área</h1>
        <form action="{{ route('area.store') }}" method="POST">
            @csrf
            <label>Name:</label>
            <input type="text" name="name"><br>
            <button type="submit">Guardar</button>
        </form>
    @endsection
</body>

</html>

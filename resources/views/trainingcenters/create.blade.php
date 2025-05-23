<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>trainingcenter create</title>
</head>

<body>
    @extends('layouts.app')

    @section('content')
        <h1>Crear Training Center</h1>
        <form action="{{ route('trainingcenter.store') }}" method="POST">
            @csrf
            <label>Name:</label>
            <input type="text" name="name"><br>

            <label>Location:</label>
            <input type="text" name="location"><br>

            <button type="submit">Guardar</button>
        </form>
    @endsection
</body>

</html>

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
        <h1>Lista de Aprendizes</h1>
        <a href="{{ route('apprentice.create') }}">Crear nueva</a>
    @endsection
</body>
</html>
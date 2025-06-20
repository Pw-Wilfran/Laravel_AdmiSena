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
        <div class="container mt-4">
            <h1 class="mb-4">Lista de Computadores</h1>

            <a href="{{ route('computer.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Numero</th>
                        <th>Marca</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($computers as $computer)
                        <tr>
                            <td>{{ $computer['id'] }}</td>
                            <td>{{ $computer['number'] }}</td>
                            <td>{{ $computer['brand'] }}</td>

                            <td>
                                <a href="{{ route('computer.show', $computer['id']) }}" class="btn btn-info btn-sm">Ver
                                    más</a>
                            </td>
                            <td><a
                                    href="{{ route('computer.edit', $computer->id) }}"class="btn btn-success btn-sm">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('computer.destroy', $computer->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger d-flex align-items-center gap-2">
                                        <i class="bi bi-trash-fill"></i> Eliminar
                                    </button>
                                </form>
                            </td>

                            <td>
                                @if ($computer->urlPdf)
                                    <iframe src="{{ asset('storage/imagenes/' . $computer->urlPdf) }}" width="300" height="200"></iframe>
                                @else
                                    <span class="text-muted">Sin PDF</span>
                                @endif
                            </td>


                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
</body>

</html>

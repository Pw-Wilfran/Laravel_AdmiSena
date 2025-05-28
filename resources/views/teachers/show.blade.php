@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h2 class="mb-4 text-success">Detalles de Profesor</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-success">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Área</th>
                        <th scope="col">Centro de Formación</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->area->name ?? 'Sin área' }}</td>
                        <td>{{ $teacher->trainingCenter->name ?? 'Sin centro' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

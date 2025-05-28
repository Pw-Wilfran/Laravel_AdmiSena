@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h2 class="mb-4 text-primary">Detalles del Aprendiz</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Celular</th>
                        <th scope="col">Curso</th>
                        <th scope="col">Computador</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $apprentice->id }}</td>
                        <td>{{ $apprentice->name }}</td>
                        <td>{{ $apprentice->email }}</td>
                        <td>{{ $apprentice->cell_number }}</td>
                        <td>{{ $apprentice->course->course_number ?? 'Sin curso' }}</td>
                        <td>
                            {{ $apprentice->computer->number ?? 'Sin computador' }} 
                            - {{ $apprentice->computer->brand ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

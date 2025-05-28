@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h2 class="mb-4 text-success">Detalles del Curso</h2>

        <div class="card shadow">
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row">ID</th>
                            <td>{{ $course->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Número de Curso</th>
                            <td>{{ $course->course_number }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Día</th>
                            <td>{{ \Carbon\Carbon::parse($course->day)->translatedFormat('l, d F Y') }}</td>
                            {{-- Ejemplo: lunes, 27 mayo 2025 --}}
                        </tr>
                    </tbody>
                </table>
                <a href="{{ route('course.index') }}" class="btn btn-secondary mt-3">
                    <i class="bi bi-arrow-left-circle"></i> Volver a la lista de cursos
                </a>
            </div>
        </div>
    </div>
@endsection

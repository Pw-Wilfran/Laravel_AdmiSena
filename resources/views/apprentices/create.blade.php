@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header">
            <h3>Crear Aprendiz</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('apprentice.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre:</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="cell_number" class="form-label">Número de celular:</label>
                    <input type="text" name="cell_number" id="cell_number" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="course_id" class="form-label">Curso:</label>
                    <select name="course_id" id="course_id" class="form-select" required>
                        <option value="">Seleccione un curso</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->course_number }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="computer_id" class="form-label">Computador:</label>
                    <select name="computer_id" id="computer_id" class="form-select" required>
                        <option value="">Seleccione un computador</option>
                        @foreach ($computers as $computer)
                            <option value="{{ $computer->id }}">{{ $computer->number }} - {{ $computer->brand }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection

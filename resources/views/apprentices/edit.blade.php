@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar Aprendiz</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('apprentice.update', $apprentice->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ old('name', $apprentice->name) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ old('email', $apprentice->email) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="cell_number" class="form-label">Número de Celular</label>
                        <input type="text" name="cell_number" id="cell_number" class="form-control"
                            value="{{ old('cell_number', $apprentice->cell_number) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="course_id" class="form-label">Curso</label>
                        <select name="course_id" id="course_id" class="form-control" required>
                            <option value="">-- Seleccione un curso --</option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}"
                                    {{ $apprentice->course_id == $course->id ? 'selected' : '' }}>
                                    {{ $course->course_number }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="computer_id" class="form-label">Computador</label>
                        <select name="computer_id" id="computer_id" class="form-control" required>
                            <option value="">-- Seleccione un computador --</option>
                            @foreach ($computers as $computer)
                                <option value="{{ $computer->id }}"
                                    {{ $apprentice->computer_id == $computer->id ? 'selected' : '' }}>
                                    {{ $computer->number }} - {{ $computer->brand }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Aprendiz
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

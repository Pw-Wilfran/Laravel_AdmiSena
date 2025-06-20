@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3>Crear Curso</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('course.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="course_number" class="form-label">Número del Curso</label>
                    <input type="number" name="course_number" id="course_number" value="{{ old('course_number') }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="day" class="form-label">Día</label>
                    <input type="date" name="day" id="day" value="{{ old('day') }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="area_id" class="form-label">Área</label>
                    <select name="area_id" id="area_id" class="form-select" required>
                        <option value="">Seleccione un área</option>
                        @foreach ($areas as $area)
                            <option value="{{ $area->id }}" {{ old('area_id') == $area->id ? 'selected' : '' }}>
                                {{ $area->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="training_center_id" class="form-label">Centro de Formación</label>
                    <select name="training_center_id" id="training_center_id" class="form-select" required>
                        <option value="">Seleccione un centro</option>
                        @foreach ($trainingCenters as $center)
                            <option value="{{ $center->id }}" {{ old('training_center_id') == $center->id ? 'selected' : '' }}>
                                {{ $center->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection

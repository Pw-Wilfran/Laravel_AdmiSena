@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar profesor</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('teacher.update', $teacher->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ old('name', $teacher->name) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ old('email', $teacher->email) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="area_id" class="form-label">Área</label>
                        <select name="area_id" id="area_id" class="form-control" required>
                            <option value="">-- Seleccione un área --</option>
                            @foreach ($areas as $area)
                                <option value="{{ $area->id }}"
                                    {{ $teacher->area_id == $area->id ? 'selected' : '' }}>
                                    {{ $area->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="training_center_id" class="form-label">Centro de Formación</label>
                        <select name="training_center_id" id="training_center_id" class="form-control" required>
                            <option value="">-- Seleccione un centro --</option>
                            @foreach ($trainingCenters as $center)
                                <option value="{{ $center->id }}"
                                    {{ $teacher->training_center_id == $center->id ? 'selected' : '' }}>
                                    {{ $center->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Profesor
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

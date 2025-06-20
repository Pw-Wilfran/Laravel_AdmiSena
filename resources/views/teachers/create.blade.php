@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3>Crear Docente</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('teacher.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" required>
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

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection

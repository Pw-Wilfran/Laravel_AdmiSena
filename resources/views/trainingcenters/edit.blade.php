@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar Training Centers</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('trainingcenter.update', $trainingCenter->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="name" class="form-label">Nombre</label>
                        <input type="text"name="name"id="name"value="{{ old('name', $trainingCenter->name) }}" placeholder="">

                        <label for="name" class="form-label">Ubicacion</label>
                        <input type="text"name="location"id="location"value="{{ old('location', $trainingCenter->location) }}" placeholder="">

                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar Centro de Formación
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
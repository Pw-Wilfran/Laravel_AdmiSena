@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header">
            <h3>Crear Computador</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('computer.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="number" class="form-label">Número:</label>
                    <input type="text" name="number" id="number" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label">Marca:</label>
                    <input type="text" name="brand" id="brand" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="urlPdf" class="form-label">PDF:</label>
                    <input type="file" name="urlPdf" id="urlPdf" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>
@endsection


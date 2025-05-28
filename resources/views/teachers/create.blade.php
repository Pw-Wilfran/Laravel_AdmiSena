@extends('layouts.app')

@section('content')
<h2>Crear Docente</h2>

<form method="POST" action="{{ route('teacher.store') }}">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="name"><br>

    <label>Email:</label>
    <input type="email" name="email"><br>

    <label>Área:</label>
    <select name="area_id">
        @foreach ($areas as $area)
            <option value="{{ $area->id }}">{{ $area->name }}</option>
        @endforeach
    </select><br>

    <label>Centro de Formación:</label>
    <select name="training_center_id">
        @foreach ($trainingCenters as $center)
            <option value="{{ $center->id }}">{{ $center->name }}</option>
        @endforeach
    </select><br>

    <button type="submit">Guardar</button>
</form>
@endsection

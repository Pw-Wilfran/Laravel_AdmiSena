@extends('layouts.app')

@section('content')
    <h1>Crear Curso</h1>

    <form action="{{ route('course.store') }}" method="POST">
        @csrf

        <label>Course Number:</label>
        <input type="number" name="course_number" value="{{ old('course_number') }}"><br>

        <label>Day:</label>
        <input type="date" name="day" value="{{ old('day') }}"><br>

        <label>Área:</label>
        <select name="area_id">
            <option value="">Seleccione un área</option>
            @foreach ($areas as $area)
                <option value="{{ $area->id }}">{{ $area->name }}</option>
            @endforeach
        </select><br>

        <label>Centro de Formación:</label>
        <select name="training_center_id">
            <option value="">Seleccione un centro</option>
            @foreach ($trainingCenters as $center)
                <option value="{{ $center->id }}">{{ $center->name }}</option>
            @endforeach
        </select><br><br>

        <button type="submit">Guardar</button>
    </form>
@endsection

@extends('layouts.app')

@section('content')
<h2>Crear Aprendiz</h2>

<form method="POST" action="{{ route('apprentice.store') }}">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="name"><br>

    <label>Email:</label>
    <input type="email" name="email"><br>

    <label>Número de celular:</label>
    <input type="text" name="cell_number"><br>

    <label>Curso:</label>
    <select name="course_id">
        @foreach ($courses as $course)
            <option value="{{ $course->id }}">{{ $course->course_number }}</option>
        @endforeach
    </select><br>

    <label>Computador:</label>
    <select name="computer_id">
        @foreach ($computers as $computer)
            <option value="{{ $computer->id }}">{{ $computer->number }} - {{ $computer->brand }}</option>
        @endforeach
    </select><br>

    <button type="submit">Guardar</button>
</form>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <h3 class="mt-5 mb-3">Menú principal</h3>

        <div class="list-group">
            <a href="{{ route('trainingcenter.index') }}" class="list-group-item list-group-item-action">
                Centro de formación
            </a>
            <a href="{{ route('computer.index') }}" class="list-group-item list-group-item-action">
                Computadores
            </a>
            <a href="{{ route('area.index') }}" class="list-group-item list-group-item-action">
                Áreas
            </a>
            <a href="{{ route('course.index') }}" class="list-group-item list-group-item-action">
                Cursos
            </a>
            <a href="{{ route('teacher.index') }}" class="list-group-item list-group-item-action">
                Profesores
            </a>
            <a href="{{ route('apprentice.index') }}" class="list-group-item list-group-item-action">
                Aprendices
            </a>
        </div>
    </div>
@endsection

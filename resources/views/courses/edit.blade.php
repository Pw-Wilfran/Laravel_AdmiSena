@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Actualizar curso</h1>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('course.update', $course->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="name" class="form-label">Numero de curso</label>
                        <input type="number"name="number"id="number"value="{{ old('course_number', $course->course_number) }}" placeholder="">

                        <label for="name" class="form-label">Day</label>
                        <input type="date"name="day"id="day"value="{{ old('day', $course->day) }}" placeholder="">

                    </div>

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Actualizar curso
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
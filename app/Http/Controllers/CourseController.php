<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Area;
use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::with(['area', 'trainingCenter'])->get();
        return view('courses.index', compact('courses'));
    }

    public function create() {
        $areas = Area::all();
        $trainingCenters = TrainingCenter::all();
        return view('courses.create', compact('areas', 'trainingCenters'));
    }

    public function store(Request $request) {
        $request->validate([
            'course_number' => 'required',
            'day' => 'required',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id'
        ]);

        Course::create($request->all());
        return redirect()->route('course.index');
    }

    public function show(Course $course) {
        
        return view('courses.show', compact('course'));
    }

    public function edit(Course $course) {
        $areas = Area::all();
        $trainingCenters = TrainingCenter::all();
        return view('courses.edit', compact('course', 'areas', 'trainingCenters'));
    }

    public function update(Request $request, Course $course) {
        $request->validate([
            'course_number' => 'required',
            'day' => 'required',
            'area_id' => 'required|exists:areas,id',
            'training_center_id' => 'required|exists:training_centers,id'
        ]);

        $course->update($request->all());
        return redirect()->route('course.index');
    }

    public function destroy(Course $course) {
        $course->delete();
        return redirect()->route('course.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\TrainingCenter;
use Illuminate\Http\Request;

class TrainingCenterController extends Controller
{
    public function index()
    {
        $trainingCenters = TrainingCenter::all();
        return view('trainingCenters.index', compact('trainingCenters'));
    }

    public function create()
    {
        return view('trainingCenters.create');
    }

    public function store(Request $request)
    {
        $trainingCenter = new TrainingCenter();
        $trainingCenter->name = $request->name;
        $trainingCenter->location = $request->location;
        $trainingCenter->save();

        return $trainingCenter;
    }

}

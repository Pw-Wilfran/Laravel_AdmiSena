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

        return redirect()->route('trainingcenter.index');
    }

    public function show($id)
    {
        $trainingCenter = TrainingCenter::find($id);
    
        return view('trainingcenters.show', compact('trainingCenter'));
    }

    public function edit(TrainingCenter $trainingCenter){

        return view('trainingcenters.edit',compact('trainingCenter'));

    }

    public function update(Request $request, TrainingCenter $trainingCenter){

        $trainingCenter->name = $request->name;
        $trainingCenter->location = $request->location;
        $trainingCenter->save();
    
        return redirect()->route('trainingcenter.index');

    }

    public function destroy (TrainingCenter $trainingCenter){
        
        $trainingCenter->delete();

        return redirect()->route('trainingcenter.index');
    }
}

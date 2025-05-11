<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    public function index()
    {
        $computers = Computer::all();
        return view('computers.index', compact('computers'));
    }

    public function create()
    {
        return view('computers.create');
    }

    public function store(Request $request)
    {
        $computer = new Computer();
        $computer->number = $request->number;
        $computer->brand = $request->brand;
        $computer->save();

        return $computer;
    }
}

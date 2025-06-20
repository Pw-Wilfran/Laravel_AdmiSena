<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        

        $file = $request->file('urlPdf');
        $nombreArchivo = "pdf_" . time() . "." . $file->guessExtension();
        $file->storeAs('imagenes', $nombreArchivo);
        $computer->urlPdf = $nombreArchivo;

        $computer->save();
        return redirect()->route('computer.index')->with('success', 'Computador actualizado correctamente.');
    }

    public function show(Computer $computer)
    {
        return view('computers.show', compact('computer'));
    }

    public function edit(Computer $computer)
    {
        return view('computers.edit', compact('computer'));
    }

    public function update(Request $request, Computer $computer)
    {
        $computer->number = $request->number;
        $computer->brand = $request->brand;
        $computer->save();

        return redirect()->route('computer.index')->with('success', 'Computador actualizado correctamente.');
    }

    public function destroy(Computer $computer)
    {
        $computer->delete();

        return redirect()->route('computer.index')->with('success', 'Computador eliminado correctamente.');
    }
}

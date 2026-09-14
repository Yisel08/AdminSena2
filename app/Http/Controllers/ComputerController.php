<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function consultaAprendiz(){
        $compu = Computer::find(3);
        return $compu->aprendices;
    }


    
    public function index(){
    $computers = Computer::all();
    return response()->json($computers, 200);
    }

    public function show($id){
    $computer = Computer::find($id);
    return view('computer.show', compact('computer'));
    }


    public function create (){
     return view('computer.create');
    }

    public function store(Request $request){
    /*$computer= new Computer();
    $computer->number=$request->number;
    $computer->brand=$request->brand;
    $computer->save();*/
    $computer=Computer::create($request->all());

     $file=$request->file("urlFoto");

         $nombreArchivo = "foto_".time().".".$file->guessExtension();
         $request->file('urlFoto')->storeAs('public/images', $nombreArchivo );

         $computer->urlFoto = $nombreArchivo;
         $computer->save();
    return redirect()->route('computer.list');
    }

     public function edit($id){ 
    $computer = Computer::findOrFail($id);
    return view('computer.edit', compact('computer'));
    }

    public function update(Request $request, Computer $computer){
    $computer->update($request->all());
    return  redirect()->route('computer.list');
    }

    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Computer $computer){
        $computer->delete();
        return redirect()->route('computer.list');
    }

}

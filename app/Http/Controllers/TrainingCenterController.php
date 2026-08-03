<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    // consulta de que profesores hay en cada centro
    public function consultaProfesores(){
        $centro = Training_center::find(4);
        return $centro->teachers;
    }
    // consulta, en que centro de formacion se da un curso
    public function consultaCursos(){
        $centro = Training_center::find(1);
        return $centro->courses;
    }




    public function index(){
    $centers =Training_center::all();
    return view('training_center.index',compact('centers'));
    }

    public function show($id){
    $centers = Training_center::find($id);
    return view('training_center.show', compact('centers'));
    }



    public function create (){
     return view('training_center.create');
    }

    public function store(Request $request){
    /*$training_center= new Training_center();
    $training->name=$request->name;
    $training->location=$request->location;
    $training->save();*/
    $training_center=Training_center::create($request->all());
    return $training_center;
    }

    public function edit($id){ 
    $center= Training_center::findOrFail($id);
    return view('training_center.edit', compact('center'));
    }

    public function update(Request $request, Training_center $center){
    $center->update($request->all());
    return  redirect()->route('training_center.list');
    }

    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Training_center $center){
        $center->delete();
        return redirect()->route('training_center.index');
    }


}

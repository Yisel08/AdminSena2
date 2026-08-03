<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aprendice;
use App\Models\Course;
use App\Models\Computer;

class AprendiceController extends Controller
{
    public function consultaCurso(){
        $aprendiz = Aprendice::find(1);
        return $aprendiz->course;
    }

    public function consultaComputador(){
        $aprendice = Aprendice::find(3);
        return $aprendice->computer;
    }
    //

    public function index(){
    $aprendices =Aprendice::all();
    return view('aprendice.index',compact('aprendices'));
    }


     public function show($id){
    $aprendice = Aprendice::find($id);
    return view('aprendice.show', compact('aprendice'));
    }


     public function create (){
    $courses=Course::all();
    $computers=Computer::all();
     return view('aprendice.create',compact('courses','computers'));
    }

    public function store(Request $request){
    $aprendice=Aprendice::create($request->all());
    return $aprendice;
    }


     public function edit(Aprendice $aprendice){ 
    $cursos=Course::all();
    $computers=Computer::all();
     return view('aprendice.edit',compact('aprendice','cursos','computers'));
    }

    public function update(Request $request, Aprendice $aprendice){
    $aprendice->update($request->all());
    return redirect()->route('aprendice.list');
    }

    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Aprendice $aprendice){
    $aprendice->delete();
    return redirect()->route('aprendice.list');
    }


}

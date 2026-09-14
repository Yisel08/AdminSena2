<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\Training_center;

class CourseController extends Controller
{
    public function consultaArea(){
        $curso = Course::find(2);
        return $curso->area;
    }

    public function consultaCentro(){
        $curso = Course::find(1);
        return $curso->training_center;
    }

    public function consultaAprendiz(){
        $curso = Course::find(1);
        return $curso->aprendices;
    }

    public function consultaProfe(){
        $curso = Course::find(1);
        return $curso->teachers;
    }
    //


    
    public function index(){
    $cursos =Course::all();
    return response()->json($cursos, 200);
    }

     public function show($id){
    $cursos= Course::find($id);
    return view('course.show', compact('cursos'));
    }



     public function create (){
    $areas=Area::all();
    $training_centers=Training_center::all();
    return view('course.create',compact('areas','training_centers'));
    }


    public function store(Request $request){
    $course=Course::create($request->all());
    return $course;
 }


       public function edit(Course $curso){ //Encuentro el Curso
    $areas=Area::all();
    $training_centers=Training_center::all();
     return view('course.edit',compact('curso','areas', 'training_centers'));
    }


    public function update(Request $request, Course $curso){
    $curso->update($request->all());
    return redirect()->route('course.list');
    }

    //Destroy se encuentra el registro para luego eliminarlo..
    public function destroy(Course $curso){
    $curso->delete();
    return redirect()->route('course.list');
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    //
    function getStudents(){
        $students=Student::all();
        return view('students',['data'=>$students]);
    }
    public function delete($id){
        $data =Student::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function upload(Request $request){
        $student = new student;
        $student->id=$request->id;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->batch=$request->batch;
        $student->save();
        return redirect(url('students'));
    }
}

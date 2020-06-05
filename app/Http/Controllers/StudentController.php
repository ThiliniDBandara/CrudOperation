<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function display(){
        return view('/studentform');
    }
    public function save(Request $request){
        $stud_name = $request->input('stud_name');
        $stud_number = $request->input('stud_number');
        $stud_course = $request->input('stud_course');
        $stud_address = $request->input('stud_address');

        DB::insert('insert into students (stud_name,stud_number,stud_course,stud_address) values (?,?,?,?)' ,[$stud_name,$stud_number,$stud_course,$stud_address]);

        return redirect('student')->with('success','Data Saved');
    }
    public function show(){
        return view('/studentview');
    }
    public function index(){
        $student = DB::select('select * from students');
        return view('studentview', ['student'=>$student]);
    }
}

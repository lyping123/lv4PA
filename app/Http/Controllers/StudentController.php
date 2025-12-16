<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students=student::all();
        return view("students",compact("students"));
    }

    public function showRegisterPage()
    {
        return view("register");
    }

    public function registerStudent(Request $request)
    {
        $formValidate=$request->validate([
            "name"=>"required",
            "ic"=>"required|unique:students,ic",
            "course"=>"required|string",
            "contact_number"=>"required|string",
        ]);
        $student=student::create($formValidate);
        if($student){
            return redirect()->route("students.index")->with("success","Student registered successfully.");
        }
        return back()->with("error","Failed to register student. Please try again.");

    }


}

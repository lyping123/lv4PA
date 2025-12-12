<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;


class memberController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function store(Request $request)
    {
        $formvalidate=$request->validate([
            "name" => "required|integer|max:255",
            "email" => "required|email|unique:members,email",
            "gender"=>"required"
        ]);
        member::create($formvalidate);
        return back()->with("success","Member added successfully!");
    }
}

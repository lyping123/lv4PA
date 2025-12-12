<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class apiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $member=member::all();
        return response()->json($member);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            "name"=>"required|string|max:255",
            "email"=>"required|email|unique:members,email",
            "gender"=>"required|string|max:20",
        ]);
        $member=member::create($validateData);
        return response()->json($member,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $member=member::findorFail($id);
        $validateData=$request->validate([
            "name"=>"required|string|max:255",
            "email"=>"required|email|unique:members,email",
            "phone"=>"required|string|max:20",
        ]);
        $member->update($validateData);
        return response()->json($member);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member=member::findorFail($id);
        $member->delete();
        return response()->json(null,204);
    }
}

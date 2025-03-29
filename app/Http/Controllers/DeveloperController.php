<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;

use App\Models\school;

class DeveloperController extends Controller
{
    public function index(){
        //route /developers/
        //fetch all records and index them
        $developers = Developer::with('school')->orderBy('created_at','desc')->paginate(10);
        return view('developers.index',["developers" =>$developers]);
    }

    public function show($id){
        $developer=Developer::with('school')->findOrFail($id);
        return view('developers.show',["developer" => $developer]);
    }

    public function create(){
        //route /developers/create
        //web form to create new developer
        $schools= school::all();
        return view('developers.create',["schools" =>$schools]);
    }

    public function store(Request $request){
        //developers/POST
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'Exp' => 'required|integer|min:0|max:50',
            'bio' => 'required|string|min:20|max:1000',
            'school_id' => 'required|exists:schools,id',
        ]);
        Developer::create($validated);
        return redirect()->route('developers.index')->with('success','Developer Added');
    }
public function destroy($id){
//delete a single record from the developer table
$developer=Developer::findOrFail($id);
$developer->delete();
return redirect()->route('developers.index')->with('success','Record Deleted');
}
    
}

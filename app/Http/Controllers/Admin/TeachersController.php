<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cathedra;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeachersController extends Controller
{

    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $teacher = Teacher::find($id);
        $cathedras = Cathedra::all();
        return view('admin.teachers.edit', compact('teacher', 'cathedras'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
            'cathedra' => 'nullable|integer|max:3',
            'photo' => 'nullable|mimes:jpg,jpeg,bmp,png,gif,webp',
        ]);

        $teacher = Teacher::find($id);

        if(isset($request->name)){ $teacher->name = $request->name; }
        if(isset($request->email)){ $teacher->email = $request->email; }
        if(isset($request->phone)){ $teacher->phone = $request->phone; }
        if(isset($request->cathedra)){ $teacher->cathedra_id = $request->cathedra; }
        if(isset($request->position)){ $teacher->position = $request->position; }

        if($request->photo){
            $photo = $request->file('photo')->storePublicly('public/teachers/'.$id);
            $url = Storage::url($photo);
            $teacher->photo = $url;
        }

//        dd($teacher);

        $teacher->save();

        return redirect()->route('admin.teachers.index');
    }


    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{

    public function index()
    {
        $subjects = Subject::query()
            ->select(['id', 'title', 'semester', 'size', 'control', 'cathedra_id'])
            ->get();
        return view('admin.subjects.index', compact('subjects'));
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
        $subject = Subject::find($id);
        return view('admin.subjects.edit', compact('subject'));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}

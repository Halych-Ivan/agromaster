<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use App\Models\Cathedra;
use App\Models\Program;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{

    public function index(AdminRequest $request)
    {
        $data = $request->validated();
        $size = $request['size'] ?? 10;

        if(isset($data['search'])){
            if($data['search'] == 0) session()->forget('search');
            else session(['search' => $data['search']]);
        }

        $subjects = Subject::query()
            ->where('title', 'like', session('search').'%')
            ->select(['id', 'title', 'semester', 'size', 'control', 'cathedra_id', 'program_id'])
            ->paginate($size);
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


    public function show(Subject $subject)
    {
        dd($subject->program->year);
    }


    public function edit(Subject $subject)
    {
        $cathedras = Cathedra::all();
        $programs = Program::all();
        return view('admin.subjects.edit', compact('subject', 'cathedras', 'programs'));
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

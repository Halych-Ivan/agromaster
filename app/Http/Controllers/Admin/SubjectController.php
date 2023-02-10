<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Subject\StoreRequest;
use App\Http\Requests\Admin\Subject\UpdateRequest;
use App\Models\Cathedra;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function dd;

class SubjectController extends Controller
{

//    public function __invoke()
//    {
//        // TODO: Implement __invoke() method.
//        return view('admin.blog.index');
//    }

    public function index()
    {
        $subjects = Subject::all();
        return view('admin.subject.index', compact('subjects'));
    }

    public function create()
    {
        $cathedras = Cathedra::all();
        return view('admin.subject.create', compact('cathedras'));
    }

    public function edit(Subject $subject)
    {
        return view('admin.subject.edit', compact('subject'));
    }

    public function show(Subject $subject)
    {
        return view('admin.subject.show', compact('subject'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        if(isset($data['image'])){
            $data['image'] = Storage::disk('public')->put('/subjects', $data['image']);
        }

        if(isset($data['syllabus'])){
            $data['syllabus'] = Storage::disk('public')->put('/subjects', $data['syllabus']);
        }

        if(isset($data['program'])){
            $data['program'] = Storage::disk('public')->put('/subjects', $data['program']);
        }

//        dd($data);

        Subject::firstOrCreate($data);
        return redirect()->route('admin.subject.index');
    }

    public function update(UpdateRequest $request, Subject $subject)
    {
        $data = $request->validated();
        $subject->update($data);
        return view('admin.subject.show', compact('subject'));
    }

    public function delete(Subject $subject)
    {
        $subject->delete();
        return redirect()->route('admin.subject.index');
    }
}

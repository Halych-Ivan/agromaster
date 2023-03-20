<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use App\Models\Cathedra;
use App\Models\Teacher;

class TeachersController extends Controller
{

    public function index()
    {
        $size = $request['size'] ?? 10;
        $teachers = Teacher::query()->orderBy('name')->paginate($size);
        return view('admin.teachers.index', compact('teachers'));
    }


    public function create()
    {
        $cathedras = Cathedra::query()->select('id', 'title')->get();
        return view('admin.teachers.create', compact('cathedras'));
    }


    public function store(AdminRequest $request)
    {
        $data = $request->validated();
        $teacher = new Teacher();
        $this->saveData($data, $teacher, 'teachers'); // protected in Controller
        return view('admin.teachers.show', compact('teacher'))->with('alert', 'Дія виконана успішно!');
    }


    public function show(Teacher $teacher)
    {
        return view('admin.teachers.show', compact('teacher'));
    }


    public function edit(Teacher $teacher)
    {
        $cathedras = Cathedra::query()->select('id', 'title')->get();
        return view('admin.teachers.edit', compact('teacher', 'cathedras'));
    }


    public function update(AdminRequest $request, Teacher $teacher)
    {
        $data = $request->validated();
        $this->saveData($data, $teacher, 'teachers'); // protected in Controller

        $page = (session('page')) ?'page='.session('page') : '';
        return redirect()->route('admin.teachers.index', $page)->with('alert', 'Дія виконана успішно!');
    }


    public function destroy(Teacher $teacher)
    {
        return redirect()->route('admin.teachers.index')->with('danger', 'Функція видалення не реалізована!!!');
    }
}

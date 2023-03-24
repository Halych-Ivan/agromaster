<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{

    public function index(AdminRequest $request)
    {
        $data = $request->validated();
        $size = $request['size'] ?? 10;

        if(isset($data['search'])){
            if($data['search'] == 0) session()->forget('search');
            else session(['search' => $data['search']]);
        }

        $students = Student::query()
            ->where('surname', 'like', session('search').'%')
            ->orderBy('surname')
            ->paginate($size);

        return view('admin.students.index', compact('students'));
    }


    public function create()
    {
        return view('admin.students.create');
    }


    public function store(AdminRequest $request)
    {
        $data = $request->validated();
        $student = new Student();
        $this->saveData($data, $student, 'students'); // protected in Controller
        return view('admin.students.show', compact('student'))->with('alert', 'Дія виконана успішно!');
    }


    public function show(Student $student)
    {
        return view('admin.students.show', compact('student'));
    }


    public function edit(Student $student)
    {
        $groups = Group::query()->select('id', 'name')->get();
        return view('admin.students.edit', compact('student', 'groups'));
    }


    public function update(AdminRequest $request, Student $student)
    {
//        dd($request);
        $data = $request->validated();
        $this->saveData($data, $student, 'students'); // protected in Controller
        $page = (session('page')) ?'page='.session('page') : '';
        return redirect()->route('admin.students.index' , $page)->with('alert', 'Дія виконана успішно!');
    }


    public function destroy(Student $student)
    {
        return redirect()->route('admin.students.index')->with('danger', 'Функція видалення не реалізована!!!');
    }
}

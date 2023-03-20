<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use App\Models\Level;
use App\Models\Program;
use App\Models\Specialty;

class ProgramsController extends Controller
{

    public function index()
    {
        $programs = Program::all();
        return view('admin.programs.index', compact('programs'));
    }


    public function create()
    {
        $specialties = Specialty::query()->select('id', 'title')->get();
        $levels = Level::query()->select('id', 'title')->get();
        return view('admin.programs.create', compact('specialties', 'levels'));
    }


    public function store(AdminRequest $request)
    {
        $data = $request->validated();
        $program = new Program();
        $this->saveData($data, $program, 'programs'); // protected in Controller
        return view('admin.programs.show', compact('program'))->with('alert', 'Дія виконана успішно!');
    }


    public function show(Program $program)
    {
        return view('admin.programs.show', compact('program'));
    }


    public function edit(Program $program)
    {
        $specialties = Specialty::all();
        $levels = Level::all();
        return view('admin.programs.edit', compact('program', 'specialties', 'levels'));
    }


    public function update(AdminRequest $request, Program $program)
    {
        $data = $request->validated();
        $this->saveData($data, $program, 'programs'); // protected in Controller
        return redirect()->route('admin.programs.index')->with('alert', 'Дія виконана успішно!');
    }


    public function destroy(Program $program)
    {
        return redirect()->route('admin.programs.index')->with('danger', 'Функція видалення не реалізована!!!');
    }
}

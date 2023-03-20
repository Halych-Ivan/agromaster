<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use App\Models\Group;
use App\Models\Program;
use Illuminate\Http\Request;

class GroupsController extends Controller
{

    public function index()
    {
//        $size = $request['size'] ?? 10;
//        $groups = Group::query()->orderBy('title')->paginate($size);
        $groups = Group::query()->orderBy('name')->get();

        return view('admin.groups.index', compact('groups'));
    }


    public function create()
    {
        $programs = Program::query()->select('id', 'title', 'year')->get();
        return view('admin.groups.create', compact('programs'));
    }



    public function store(AdminRequest $request)
    {
        $data = $request->validated();
        $group = new Group();
        $this->saveData($data, $group, 'groups'); // protected in Controller
        return view('admin.groups.show', compact('group'))->with('alert', 'Дія виконана успішно!');
    }


    public function show(Group $group)
    {
        return view('admin.groups.show', compact('group'));
    }


    public function edit(Group $group)
    {
        $programs = Program::query()->select('id', 'title', 'year')->get();
        return view('admin.groups.edit', compact('group', 'programs'));
    }


    public function update(AdminRequest $request, Group $group)
    {
        $data = $request->validated();
        $this->saveData($data, $group, 'groups'); // protected in Controller
        return redirect()->route('admin.groups.index')->with('alert', 'Дія виконана успішно!');
    }


    public function destroy(Group $group)
    {
        return redirect()->route('admin.groups.index')->with('danger', 'Функція видалення не реалізована!!!');
    }
}

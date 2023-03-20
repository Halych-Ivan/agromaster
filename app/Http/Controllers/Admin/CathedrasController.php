<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminRequest;
use App\Models\Cathedra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CathedrasController extends Controller
{

    public function index()
    {
        $cathedras = Cathedra::all();
        return view('admin.cathedras.index', compact('cathedras'));
    }


    public function create()
    {
        return view('admin.cathedras.create');
    }


    public function store(AdminRequest $request)
    {
        $data = $request->validated();
        $cathedra = new Cathedra();
        $this->saveData($data, $cathedra, 'cathedras'); // protected in Controller
        return redirect()->route('admin.cathedras.show', compact('cathedra'))->with('alert', 'Дія виконана успішно!');;
    }


    public function show(Cathedra $cathedra)
    {
        return view('admin.cathedras.show', compact('cathedra'));
    }


    public function edit(Cathedra $cathedra)
    {
        return view('admin.cathedras.edit', compact('cathedra'));
    }


    public function update(AdminRequest $request, Cathedra $cathedra)
    {
        $data = $request->validated();
        $this->saveData($data, $cathedra, 'cathedras'); // protected in Controller
        return redirect()->route('admin.cathedras.index')->with('alert', 'Дія виконана успішно!');
    }


    public function destroy($id)
    {
        return redirect()->route('admin.cathedras.index')->with('danger', 'Функція видалення не реалізована!!!');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Cathedra\StoreRequest;
use App\Http\Requests\Admin\Cathedra\UpdateRequest;
use App\Models\Cathedra;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function dd;

class CathedraController extends Controller
{

//    public function __invoke()
//    {
//        // TODO: Implement __invoke() method.
//        return view('admin.blog.index');
//    }

    public function index()
    {
        $cathedras = Cathedra::all();
        return view('admin.cathedra.index', compact('cathedras'));
    }

    public function create()
    {
        return view('admin.cathedra.create');
    }

    public function edit(Cathedra $cathedra)
    {
        return view('admin.cathedra.edit', compact('cathedra'));
    }

    public function show(Cathedra $cathedra)
    {
        return view('admin.cathedra.show', compact('cathedra'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        if(isset($data['image'])){
            $data['image'] = Storage::disk('public')->put('/cathedras', $data['image']);
        }

        if(isset($data['logo'])){
            $data['logo'] = Storage::disk('public')->put('/cathedras', $data['logo']);
        }

        Cathedra::firstOrCreate($data);
        return redirect()->route('admin.cathedra.index');
    }

    public function update(UpdateRequest $request, Cathedra $cathedra)
    {
        $data = $request->validated();

//        dd($data);

        if(isset($data['image'])){
            $data['image'] = Storage::disk('public')->put('/cathedras', $data['image']);
        }

        if(isset($data['logo'])){
            $data['logo'] = Storage::disk('public')->put('/cathedras', $data['logo']);
        }

        $cathedra->update($data);
        return view('admin.cathedra.show', compact('cathedra'));
    }

    public function delete(Cathedra $cathedra)
    {
        $cathedra->delete();
        return redirect()->route('admin.cathedra.index');
    }
}

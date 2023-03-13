<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'abbr' => 'required|string|max:255',
            'link' => 'nullable|string|max:255',
            'info' => 'nullable|string|max:255',
            'logo' => 'nullable|mimes:jpg,jpeg,bmp,png,gif,webp',
        ]);

        $cathedra = new Cathedra();
        $cathedra->title = $request->title;
        $cathedra->abbr = $request->abbr;
        if(isset($request->link)){ $cathedra->link = $request->link; }
        if(isset($request->info)){ $cathedra->info = $request->info; }

        $cathedra->save();

        if($request->logo) {
            $logo = $request->file('logo')->storePublicly('public/cathedras/' . $cathedra->id);
            $url = Storage::url($logo);
            $cathedra->logo = $url;
        }

        $cathedra->save();

        return redirect()->route('admin.cathedras.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $cathedra = Cathedra::find($id);
        return view('admin.cathedras.edit', compact('cathedra'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'nullable|string|max:255',
            'abbr' => 'nullable|string|max:255',
            'link' => 'nullable|string|max:255',
            'info' => 'nullable|string|max:255',
            'logo' => 'nullable|mimes:jpg,jpeg,bmp,png,gif,webp',
        ]);

        $cathedra = Cathedra::find($id);

        if(isset($request->title)){ $cathedra->title = $request->title; }
        if(isset($request->abbr)){ $cathedra->abbr = $request->abbr; }
        if(isset($request->link)){ $cathedra->link = $request->link; }
        if(isset($request->info)){ $cathedra->info = $request->info; }
        if($request->logo) {
            $logo = $request->file('logo')->storePublicly('public/cathedras/' . $id);
            $url = Storage::url($logo);
            $cathedra->logo = $url;
        }

        $cathedra->save();

        return redirect()->route('admin.cathedras.index');
    }


    public function destroy($id)
    {
        //
    }
}

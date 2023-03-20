<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    protected function saveData($request, $model, $folder = 'main')
    {
//        dd($request);
        if(isset($request['abbr'])){ $model->abbr = $request['abbr']; }
        if(isset($request['info'])){ $model->info = $request['info']; }
        if(isset($request['code'])){ $model->code = $request['code']; }
        if(isset($request['year'])){ $model->year = $request['year']; }
        if(isset($request['link'])){ $model->link = $request['link']; }
        if(isset($request['name'])){ $model->name = $request['name']; }
        if(isset($request['meet'])){ $model->meet = $request['meet']; }
        if(isset($request['term'])){ $model->term = $request['term']; }
        if(isset($request['title'])){ $model->title = $request['title']; }
        if(isset($request['email'])){ $model->email = $request['email']; }
        if(isset($request['phone'])){ $model->phone = $request['phone']; }
        if(isset($request['entry'])){ $model->entry = $request['entry']; }
        if(isset($request['position'])){ $model->position = $request['position']; }


        if(isset($request['level_id'])){ $model->level_id = $request['level_id']; }
        if(isset($request['program_id'])){ $model->program_id = $request['program_id']; }
        if(isset($request['cathedra_id'])){ $model->cathedra_id = $request['cathedra_id']; }
        if(isset($request['specialty_id'])){ $model->specialty_id = $request['specialty_id']; }


        if(isset($request['photo'])){
            $url = $request['photo']->storePublicly('public/'.$folder.'/'.$model->id);
            $model->photo = Storage::url($url);
        }

        if(isset($request['logo'])){
            $url = $request['logo']->storePublicly('public/'.$folder.'/'.$model->id);
            $model->logo = Storage::url($url);
        }

        if(isset($request['image'])){
            $url = $request['image']->storePublicly('public/'.$folder.'/'.$model->id);
            $model->image = Storage::url($url);
        }

        if(isset($request['file'])){
            $url = $request['file']->storePublicly('public/'.$folder.'/'.$model->id);
            $model->file = Storage::url($url);
        }

//        dd($model);
        $model->save();
    }
}

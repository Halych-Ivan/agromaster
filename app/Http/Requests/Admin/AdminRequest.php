<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'year' => 'nullable|string|max:5',
            'code' => 'nullable|string|max:5',
            'term' => 'nullable|string|max:4',
            'entry' => 'nullable|string|max:4',
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'meet' => 'nullable|string|max:255',
            'abbr' => 'nullable|string|max:255',
            'link' => 'nullable|string|max:255',
            'info' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',


            'level_id' => 'nullable|string|max:2',
            'program_id' => 'nullable|string|max:2',
            'cathedra_id' => 'nullable|string|max:3',
            'specialty_id' => 'nullable|string|max:2',


            'photo' => 'nullable|mimes:jpg,jpeg,bmp,png,gif,webp',
            'logo'  => 'nullable|mimes:jpg,jpeg,bmp,png,gif,webp',
            'image' => 'nullable|mimes:jpg,jpeg,bmp,png,gif,webp|max:2048',
            'file'  => 'nullable|mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf,doc,docx|max:2048',
        ];
    }
}

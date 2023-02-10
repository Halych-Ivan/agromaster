<?php

namespace App\Http\Requests\Admin\Subject;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'code' => 'required|string',
            'size' => 'required|string',
            'content' => 'nullable|string',
            'image' => 'nullable|file',
            'syllabus' => 'nullable|file',
            'program' => 'nullable|file',
            'cathedra_id'=> 'required|integer|exists:cathedras,id',

        ];
    }
}

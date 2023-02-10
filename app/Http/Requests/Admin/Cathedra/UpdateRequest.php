<?php

namespace App\Http\Requests\Admin\Cathedra;

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
            'title' => 'required|string|unique:cathedras,title,' . $this->id,
            'content' => 'nullable|string',
            'abbr' => 'required|string|unique:cathedras,abbr,' . $this->id,
            'link' => 'nullable|string',
            'image' => 'nullable|file',
            'logo' => 'nullable|file',

            'id'=> 'required|integer|exists:cathedras,id',
        ];
    }
}

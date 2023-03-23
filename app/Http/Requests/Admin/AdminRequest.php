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
            'surname' => 'nullable|string|max:255',
            'patronymic' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'meet' => 'nullable|string|max:255',
            'gradebook' => 'nullable|string|max:255',
            'finance' => 'nullable|string|max:255',
            'order' => 'nullable|string|max:255',
            'order_in' => 'nullable|string|max:255',
            'order_in_data' => 'nullable|string|max:255',
            'order_out' => 'nullable|string|max:255',
            'order_out_data' => 'nullable|string|max:255',
            'study_start' => 'nullable|string|max:255',
            'study_end' => 'nullable|string|max:255',
            'case' => 'nullable|string|max:255',
            'contract' => 'nullable|string|max:255',
            'contract_date' => 'nullable|string|max:255',
            'sex' => 'nullable|string|max:255',
            'birth' => 'nullable|string|max:255',
            'passport' => 'nullable|string|max:255',
            'passport_series' => 'nullable|string|max:255',
            'passport_number' => 'nullable|string|max:255',
            'passport_record' => 'nullable|string|max:255',
            'passport_date_issue' => 'nullable|string|max:255',
            'passport_date_expiry' => 'nullable|string|max:255',
            'student_id_number' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'address_region' => 'nullable|string|max:255',
            'address_district' => 'nullable|string|max:255',
            'address_city' => 'nullable|string|max:255',
            'address_street' => 'nullable|string|max:255',
            'school' => 'nullable|string|max:255',
            'school_document' => 'nullable|string|max:255',
            'school_document_number' => 'nullable|string|max:255',
            'school_document_date' => 'nullable|string|max:255',
            'school_document_mark' => 'nullable|string|max:255',
            'mentor' => 'nullable|string|max:255',






            'abbr' => 'nullable|string|max:255',
            'link' => 'nullable|string|max:255',
            'info' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',


            'level_id' => 'nullable|string|max:3',
            'group_id' => 'nullable|string|max:3',
            'program_id' => 'nullable|string|max:3',
            'cathedra_id' => 'nullable|string|max:3',
            'specialty_id' => 'nullable|string|max:3',


            'school_document_photo' => 'nullable|mimes:jpg,jpeg,bmp,png,gif,webp',
            'passport_photo' => 'nullable|mimes:jpg,jpeg,bmp,png,gif,webp',
            'student_id_photo' => 'nullable|mimes:jpg,jpeg,bmp,png,gif,webp',
            'photo' => 'nullable|mimes:jpg,jpeg,bmp,png,gif,webp',
            'logo'  => 'nullable|mimes:jpg,jpeg,bmp,png,gif,webp',
            'image' => 'nullable|mimes:jpg,jpeg,bmp,png,gif,webp|max:2048',
            'file'  => 'nullable|mimes:png,jpg,jpeg,csv,txt,xlx,xls,pdf,doc,docx|max:2048',
        ];
    }
}

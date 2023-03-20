<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Модель студентів, інформація про студента

    protected $table = 'students';
    protected $guarded = false;


    // група
    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'students_subjects', 'students_id', 'subjects_id');
//        return $this->belongsToMany(Subject::class);
    }


}

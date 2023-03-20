<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plans extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'plans';
    protected $guarded = false;


    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }
}
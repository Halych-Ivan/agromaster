<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tail extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tails';
    protected $guarded = false;
}

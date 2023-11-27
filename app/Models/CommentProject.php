<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CommentProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id',
        'comment',
    ];


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


/**
 * @property string comment
 *
 */
class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_creator',
        'status',
        'data_start',
        'data_end',
        'users_id',
    ];

    public function getCommentAttribute()
    {
        return $this->com->comment;
    }

    public function com(): HasOne
    {
        return $this->hasOne(CommentProject::class, 'project_id', 'id');
    }
}

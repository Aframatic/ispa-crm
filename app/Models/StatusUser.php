<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusUser extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'users_id',
        'status',
    ];
}

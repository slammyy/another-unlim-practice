<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Task extends Model
{
    protected $fillable = [
        'name',
        'task_title',
        'user_id',
        'project_id',
        'updated_at',
        'created_at',
    ];
}

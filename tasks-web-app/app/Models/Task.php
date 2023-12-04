<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Task extends Model
{
    public function name(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function title(): HasOne
    {
        return $this->hasOne(Project::class);
    }

    protected $fillable = [
        'name',
        'task_title',
        'user',
        'project',
        'updated_at',
        'created_at',
    ];
}

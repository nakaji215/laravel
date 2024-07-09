<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'task_name', 'task_description', 'assign_person_name', 'estimate_hour',
    ];
}

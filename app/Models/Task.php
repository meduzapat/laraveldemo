<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *  store a task name, task description, typical laravel timestamps, and a reference to the assigned user
 */
class Task extends Model
{
    use HasFactory;


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{
    use HasFactory;
    public function employees()
    {
        return $this->belongsToMany(employee::class, 'employee_task');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description', 
        'status', 
        'due_date',
        // 'project_id',
        // 'status', 
        'completed', 
        'completed_at'
    ];
}

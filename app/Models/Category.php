<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'task_id'];


    public function tasks(): BelongsToMany
    {
        return $this->belongsToMany(Task::class, 'categories_tasks');
    }
}

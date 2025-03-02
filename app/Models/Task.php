<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'slug'];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($task) {
            $task->slug = Str::slug($task->title);
        });
    }
}

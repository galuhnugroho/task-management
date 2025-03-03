<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['user_id', 'title', 'description', 'slug', 'is_completed'];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($task) {
            $task->slug = Str::slug($task->title);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

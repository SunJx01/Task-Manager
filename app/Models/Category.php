<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'categories',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function tasks(){
        return $this->hasMany(Task::class);
    }

}

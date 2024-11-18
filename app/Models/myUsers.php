<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class myUsers extends Model
{   
    protected $table = 'my_users';
    protected $fillable = [
        'email',
        'password',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function tasks(){
        return $this->hasMany(Task::class);
    }
}
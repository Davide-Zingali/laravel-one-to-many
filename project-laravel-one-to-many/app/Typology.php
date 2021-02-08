<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typology extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];

    // relazione con task
    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}

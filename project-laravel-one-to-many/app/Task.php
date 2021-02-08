<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description',
        'priority',
        'employee_id'
    ];

    public function Employee() {
        return $this -> belongsTo(Employee::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function Tasks() {
        return $this -> hasMany(Task::class);
    }
}

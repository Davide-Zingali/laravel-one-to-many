<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function Employee() {
        return $this -> belongsTo(Employee::class);
    }
}

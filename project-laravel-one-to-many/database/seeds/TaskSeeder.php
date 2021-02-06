<?php

use Illuminate\Database\Seeder;

use App\Task;
use App\Employee;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class, 50) -> make() -> each(function($incarico) {

            $lavoratore = Employee::inRandomOrder() -> first();

            $incarico -> Employee() -> associate($lavoratore);

            $incarico -> save();
        });
    }
}
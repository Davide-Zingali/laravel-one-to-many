<?php

use Illuminate\Database\Seeder;

use App\Typology;

use App\Task;

class TypologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Typology::class, 30) -> create() -> each(function($tipologia) {

            $incarichi = Task::inRandomOrder() -> limit(rand(1, 5)) -> get();

            $tipologia -> tasks() -> attach($incarichi);

            // $tipologia -> save();
        });
    }
}

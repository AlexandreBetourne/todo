<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker, Task $task)
    {
        foreach (range(1,100) as $i) {
          $task->create([
            'name' => $faker->sentence(10)
          ]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)
            ->create()
            ->each(function ($user){
                Project::factory(10)
                ->create(['user_id' => $user->id])
                ->each(function ($project){
                    Task::factory(10)->create([
                        'project_id' => $project->id
                    ]);
                });
            });
    }
}

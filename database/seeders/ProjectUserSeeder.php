<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $projects = Project::all();

        // Assign each project to a random set of users
        foreach ($projects as $project) {
            $project->users()->attach(
                $users->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}

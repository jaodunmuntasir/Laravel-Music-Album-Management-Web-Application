<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('projects')->truncate();
        // DB::table('tracks')->truncate();

        $users= \App\Models\User::all();

        foreach ($users as $user) {
            \App\Models\Project::factory(20)
                ->for($user)
                ->hasTracks(5)
                ->create() ;
        }
    }
}

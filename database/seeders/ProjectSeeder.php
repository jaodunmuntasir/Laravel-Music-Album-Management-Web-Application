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
        DB::table('projects')->truncate();
        DB::table('tracks')->truncate();

        \App\Models\Project::factory(20)
        ->hasTracks(5)
        ->create() ;
    }
}

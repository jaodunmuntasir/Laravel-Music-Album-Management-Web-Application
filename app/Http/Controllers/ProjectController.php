<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectFormRequest;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {
        // $projects = [
        //     [ "name" => "my project 1" ],
        //     [ "name" => "my project 2" ],
        //     [ "name" => "my project 3" ],
        // ];

        $projects = Project::all();

        return view('projects.list', [
            "projects" => $projects,
        ]); // projects/list.blade.php
    }

    public function create() {
        return view('projects.create');
    }

    public function store(ProjectFormRequest $request) {
        // $validatedData = $request -> validate([
        //     "name" => "required",
        //     "description" => "nullable",
        //     "image_url" => "nullable|url",
        // ]);

        // Project::create($validatedData); // saving to database

        Project::create($request -> validated()); 
        // using validation rules defined in the model (app/Models/Project.php)
        /* Another way of creating a new instance of Project and saving it to the database: */
        
        return redirect("/projects");
    }

    public function show(Project $project) {
        // $project = Project::findOrFail($id);
        return view('projects.show', [
            "project" => $project,
        ]); // projects/show.blade.php
    }

    public function edit(Project $project) {
        // $project = Project::findOrFail($id);
        return view('projects.edit', [
            "project" => $project,
        ]);
    }

    public function update(Project $project, ProjectFormRequest $request) {
        // $validatedData = $request -> validate([
        //     "name" => "required",
        //     "description" => "nullable",
        //     "image_url" => "nullable|url",
        // ]);

        // // $project = Project::findOrFail(Project $project);
        // $project -> update($validatedData); // saving to database
        
        $project -> update($request -> validated());
        return redirect("/projects/{$project -> id}");
    }

    public function destroy(Project $project) {
        // $project = Project::findOrFail($id);
        $project -> delete(); 

        return redirect('/projects');
    }
}

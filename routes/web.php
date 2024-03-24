<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Models\Project;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $noProject = Project::count();
    return view('main', [
        "numberOfProjects" => $noProject,
    ]); // main.blade.php
});
// Route::get('/projects', [ProjectController::class, "list"]);
// Route::get('/projects/create', [ProjectController::class, "create"]);
// Route::post('/projects/create', [ProjectController::class, "store"]);
// Route::get('/projects/{project}', [ProjectController::class, "show"]);

// Route::get('/projects/{project}/edit', [ProjectController::class, "edit"]);
// Route::post('/projects/{project}/edit', [ProjectController::class, "update"]);

// Route::post('/projects/{project}/delete', [ProjectController::class, "delete"]);

Route::resource('projects', ProjectController::class);
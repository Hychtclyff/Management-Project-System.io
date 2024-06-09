<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegisterController;
use App\Models\Project;
use App\Models\User;
use App\Models\User_Project;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('login.index', ['title' => 'Login', LoginController::class, 'index']);
})->middleware('guest');
Route::get('/login', function () {
    return view('login.index', ['title' => 'Login', LoginController::class, 'index']);
});
Route::get('/sign-out',  ['title' => 'Login', LoginController::class, 'logout']);

Route::post('/',  ['title' => 'Login', LoginController::class, 'authenticate']);


Route::get('/register',  ['title' => 'Login', RegisterController::class, 'index']);
Route::post('/register',  ['title' => 'Login', RegisterController::class, 'store']);

Route::get('/account',  function () {
    return view('account', ['title' => 'your account']);
});



Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get(
    '/myprojects',
    [ProjectController::class, 'loadMyProjects']
)->name('myprojects');

Route::post('/myprojects',  [ProjectController::class, 'create']);
Route::post('myprojects/update/id={project:id}',  [ProjectController::class, 'update']);


Route::get('/projects/project/id={project:id}', function (Project $project) {
    return view('project', ['title' => 'project management task', 'project' => $project, 'users' => $project->users]);
});

Route::get('/myprojects/update/id={project:id}', [ProjectController::class, 'edit'])->name('myprojects.edit');

Route::get('/projects/submission/id={project:id}', [ProjectController::class, 'submission']);
Route::post('/projects/submission/id={project:id}', [ProjectController::class, 'add_submission']);





// Route projects
Route::get('myprojects/delete/id={project:id}',  [ProjectController::class, 'destroy']);
Route::get(
    '/projects',
    [ProjectController::class, 'loadAllProjects']
)->name('projects');

Route::get(
    '/projects/add-project-{project:id}',
    [ProjectController::class, 'addProject']
)->name('projects');


Route::get('/create-project', function () {
    return view('create-prject');
});

Route::get('/login', function () {
    return view('login');
});




Route::get('/test', function () {
    $a = Project::find(1)->name;

    echo $a;
});

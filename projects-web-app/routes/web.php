<?php

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

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
    $projects = Project::all();
    return view('index', ['projects' => $projects]);
});

Route::post('/store-task', function (Request $request) {
    $task = $request->task;

    preg_match('/^.*\#/', $task, $title);
    $title = $title[0];
    $title.chop('#');
    trim($title, ' ');

    preg_match('/#.*/', $task, $project);
    $project = $project[0];
    trim($project, ' ');
    trim($project, '#');

    $task = new Task;
    $task->task = $title;
    $task->project_id = Project::where('title', $project)->get()->first();
    $task->save();
});

Route::get('/test', function () {
    return Project::where('title', 'Ut')->get()->first();
});
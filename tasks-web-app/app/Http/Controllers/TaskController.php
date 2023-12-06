<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function createTask()
    {
        $users = User::all();
        $projects = Project::all();

        return view('createTask', compact('users', 'projects'));
    }

    public function showTask()
    {
        $collection = Task::all();

        return view('showTask', compact('collection'));
    }

    public function store(Request $request)
    {
        $user = $request->user;
        $user_id = User::where('name', $user)->first()->id;
        $project = $request->project;
        $project_id = Project::where('title', $project)->first()->id;

        $task = new Task;
        $task->title = $request->title;
        $task->user_id = $user_id;
        $task->project_id = $project_id;
        $task->save();

        return redirect('show-task');
    }
}

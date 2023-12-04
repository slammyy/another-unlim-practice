<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function show(): View
    {
        $collection = DB::table('tasks')->get();
        return view('tasks', ['collection' => $collection]);
    }

    public function update(Request $request)
    {
        $task = new Task;
        $task->title = $request->title;
        $task->user = $request->user;
        $task->project = $request->project;
        $task->save();
        return redirect('create')->with('status', 'Data Has Been inserted');
    }
}

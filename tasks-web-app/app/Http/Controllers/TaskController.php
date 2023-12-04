<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function show(): View
    {
        $collection = DB::table('tasks')->get();
        return view('tasks', ['collection' => $collection]);
    }

    public function store(Request $request): RedirectResponse
    {
        $task = new Task;
        $task->title = $request->title;
        $task->user = $request->user;
        $task->project = $request->project;
        $task->save();

        return redirect('tasks')->with('status', 'Data Has Been inserted');
    }
}

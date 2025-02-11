<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        $task = Task::create(['title' => $request->title]);

        return response()->json($task, 201);
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update(['is_completed' => $request->is_completed]);

        return response()->json($task);
    }

    public function pending()
    {
        return response()->json(Task::where('is_completed', false)->get());
    }
}


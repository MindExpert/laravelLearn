<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;

class ProjectTasksController extends Controller
{
    public function update(Task $task)
    {
        $task->update([
            'completed' => request()->has('completed')
        ]);

        return back();
    }
}

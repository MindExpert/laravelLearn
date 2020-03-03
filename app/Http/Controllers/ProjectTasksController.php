<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        /* 2nd Method */
        // what are we doing to the project, We are adding a task, so I'm gonna create a method called addTask();
        // This method is of Project model, there we "$this->tasks()->create(compact('description'))", and since its 
        // an eloquent model, it add t
        
        $validated = request()->validate([
            'description' => ['required',  'min:3', 'max:165']
        ]);
        $project->addTask($validated);


        /* 1st Method */
        //    Task::create([
        //        'project_id' => $project->id,
        //        'description' => request('description'),
        //    ]);

       return back();
    }


    public function update(Task $task)
    {
        $task->update([
            'completed' => request()->has('completed')
        ]);
        return back();
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index() {
        $projects = Project::all();
        
        return view('projects.index', ['projects' => $projects]);
        //  or use  (identical)-> return view('projects.index', compact('projects'));
    }

    public function store() {    
        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }

    public function create() {    
        return view('projects.create');
    }

    public function show()
    {
        # code...
    }

    public function update($id)
    {
        $project = Project::findOrFail($id);
        
        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/projects');

        // dd(request()->all());
    }

    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return redirect('/projects');
        // dd('Delete ' . $id);
    }

    public function edit($id) // example.com/projects/1/edit
    {
        
        $project = Project::findOrFail($id);
        return view('projects.edit', compact('project'));
    }
}


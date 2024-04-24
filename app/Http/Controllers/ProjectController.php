<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();
        // $tasks = Task::all();

        return view('project.index', compact('project'));
    }

    
    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|max:255',
        'due_date' => 'required|date',
    ]);

    $project = new Project();
    $project->name = $request->name;
    $project->due_date = $request->due_date;
    $project->save();

    return redirect()->route('project.index');
}

    
    public function edit(string $id)
    {
        //
    }

    public function show(string $id)
    {
        $project = Project::all();
  
        return view('project.show', compact('project'));
    }
   
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}

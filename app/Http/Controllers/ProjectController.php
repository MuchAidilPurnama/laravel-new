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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

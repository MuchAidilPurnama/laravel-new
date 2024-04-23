<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;

class AdminTaskController extends Controller
{
    public function index()
    {

        $tasks = Task::where('completed','user_id', auth()->id(), false)
                     ->orderBy('description') // Menggunakan orderBy() untuk mengurutkan berdasarkan due_date
                     ->get();

        return view('admin.tasks.index', compact('tasks'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = [
            ['value' => 'progress', 'label' => 'Progress'],
            ['value' => 'done', 'label' => 'Done'],
        ];
        return view('admin.tasks.create', compact('statuses'));
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Task::create($request->all());

        $request->validate([
            'title' => 'required'
        ]);

        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->save();


        // $request->validate([
        //     'title' => 'required|max:255',
        //     'description' => 'nullable',
        //     'priority' => 'required|max:255',
        //     'due_date' => 'nullable|max:255',
        // ]);

        // Task::create([
        //     'title' => $request->input('title'),
        //     'description' => $request->input('description'),
        //     'priority' => $request->input('priority'),
        //     'due_date' => $request->input('duedate'),
        // ]);
 
        return redirect()->route('admin.tasks')->with('success', 'Task added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::findOrFail($id);
  
        return view('admin.tasks.show', compact('task'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id);

        $statuses = [
            [
                'label' => 'Progress',
                'value' => 'Progress',
            ],
            [
                'label' => 'Done',
                'value' => 'Done',
            ]
        ];
  
        return view('admin.tasks.edit', compact('statuses','task'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Mendapatkan instance dari Task yang ingin diperbarui
        $task = Task::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'status' => 'required'
        ]);

        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->save();

        // Memperbarui task yang ada di database dengan data yang baru
        // $task->update($request->all());

        return redirect()->route('admin.tasks')->with('success', 'Task updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
  
        $task->delete();
  
        return redirect()->route('admin.tasks')->with('success', 'task deleted successfully');
    }

    public function completed(string $id)
    {
        // Mendapatkan instance dari Task yang ingin ditandai sebagai selesai
        $task = Task::findOrFail($id);

        // Menandai task sebagai completed
        $task->update([
            'completed' => true, // Menggunakan tanda sama dengan (=>) bukan panah (->)
            'completed_at' => now(),
        ]);

        return redirect()->route('admin.tasks')->with('success', 'Task completed successfully');
    }

    public function showCompleted()
    {
        // Menampilkan semua task yang telah selesai
        $completedTasks = Task::where('completed', true)
                              ->orderBy('completed_at', 'desc') // Menggunakan orderBy() untuk mengurutkan berdasarkan completed_at
                              ->get();

        return view('admin.taskshow', compact('completedTasks'));
    }

    
}

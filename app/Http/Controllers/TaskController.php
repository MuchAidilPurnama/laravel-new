<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Task;
 
class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where('completed', false)
                     ->orderBy('priority', 'desc')
                     ->orderBy('due_date') // Menggunakan orderBy() untuk mengurutkan berdasarkan due_date
                     ->get();

        return view('tasks.index', compact('tasks'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Task::create($request->all());

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
 
        return redirect()->route('tasks')->with('success', 'Task added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::findOrFail($id);
  
        return view('tasks.show', compact('task'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id);
  
        return view('tasks.edit', compact('task'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Mendapatkan instance dari Task yang ingin diperbarui
        $task = Task::findOrFail($id);

        // Memperbarui task yang ada di database dengan data yang baru
        $task->update($request->all());

        return redirect()->route('tasks')->with('success', 'Task updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
  
        $task->delete();
  
        return redirect()->route('tasks')->with('success', 'task deleted successfully');
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

        return redirect()->route('tasks')->with('success', 'Task completed successfully');
    }

    public function showCompleted()
    {
        // Menampilkan semua task yang telah selesai
        $completedTasks = Task::where('completed', true)
                              ->orderBy('completed_at', 'desc') // Menggunakan orderBy() untuk mengurutkan berdasarkan completed_at
                              ->get();

        return view('taskshow', compact('completedTasks'));
    }
}
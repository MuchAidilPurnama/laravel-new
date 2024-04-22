<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = [
            ['value' => 'admin', 'label' => 'Admin'],
            ['value' => 'user', 'label' => 'User'],
        ];
        return view('users.create', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('users')->with('success', 'Users added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);

        $statuses = [
            [
                'label' => 'Admin',
                'value' => 'admin',
            ],
            [
                'label' => 'Done',
                'value' => 'done',
            ]
        ];
  
        return view('users.edit', compact('statuses','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required'
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->level = $request->level;
        $user->password = $request->password;
        $user->save();


        return redirect()->route('users')->with('success', 'User updated successfully');
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
  
        $user->delete();
  
        return redirect()->route('users')->with('success', 'user deleted successfully');
    }
}

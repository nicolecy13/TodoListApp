<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todolist;
class todocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Todolist::all();
        return view ('tasks.index')->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Todolist::create($input);
        return redirect('tasks')->with('flash_message', 'Task Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $tasks = Todolist::find($id);
        return view('tasks.show')->with('tasks',$tasks);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tasks = Todolist::find($id);
        return view('tasks.edit')->with('tasks', $tasks);
   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $tasks = Todolist::find($id);
        $input = $request->all();
        $tasks->update($input);
        return redirect('tasks')->with('flash_message', 'Task Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Todolist::destroy($id);
        return redirect('tasks')->with('flash_message', 'Task deleted!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('tasks.index', compact('tasks'));
    }
    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));

    }
    public function create(Task $task)
    {
        return view('tasks.create');
    }

    public function store(Task $task)
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);
        Task::create(request()->all());

        return redirect('/tasks');
    }
}

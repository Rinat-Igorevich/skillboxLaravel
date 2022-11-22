<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();
//    $tasks = DB::table('tasks')->get();
//    dd($tasks);
//    return view('welcome', ['name'=>$name]);
//    return view('welcome')->with(['name'=>$name]);
        return view('tasks.index', compact('tasks'));
    }
    public function show(Task $task)
    {
//        $task = Task::find($id);
//        return $task;
//        $task = DB::table('tasks')->find($id);
        return view('tasks.show', compact('task'));

    }
    public function create(Task $task)
    {
//        $task = Task::find($id);
//        return $task;
//        $task = DB::table('tasks')->find($id);
        return view('tasks.create');

    }

    public function store(Task $task)
    {
//        dd(request(['title', 'body']));
//        dd(request()->get('title'));
//        dd(request('title'));
//        dd(request()->all());
//        $task = new Task();
//        $task->title = request('title');
//        $task->body = request('body');
//        $task->save();
//        Task::create([
//            'title' => request('title'),
//            'body' => request('body'),
//        ]);
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);
        Task::create(request()->all());

        return redirect('/tasks');
    }
}

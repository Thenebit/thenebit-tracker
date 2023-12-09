<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        $task = Task::all();

        return view('pages.home', compact('task'));
    }

    public function store(Request $request) {
        $task = new Task;

        $task->name = $request->input('name');
        $task->deadline = $request->input('deadline');
        $task->status = 'In Pending';

        $task->save();

        return redirect('/')->with('success', 'Thenebit Project Added Successfully');
    }

    public function progress($id) {
        $taskStatus = Task::find($id);

        $taskStatus->status = 'In Progress';
        $taskStatus->save();

        return redirect('/');
    }

    public function completed($id) {
        $taskStatus = Task::find($id);    

        $taskStatus->status = 'Completed';
        $taskStatus->save();

        return redirect('/');
    }
}

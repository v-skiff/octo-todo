<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\createTaskRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TasksController extends Controller
{
    use ValidatesRequests;

    public function index() {
        $tasks = Task::all();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create() {
        return view('tasks.create');
    }

    public function store(CreateTaskRequest $request) {
        Task::create($request->all());
        return redirect()->route('tasks.index');
    }

    public function edit($id) {
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $task = Task::find($id);
        $task->fill($request->all());
        $task->save();

        return redirect()->route('tasks.index');
    }

    public function show($id) {
        $task = Task::find($id);
        return view('tasks.show', ['task' => $task]);
    }

    public function destroy($id) {
        Task::find($id)->delete();
        return redirect()->route('tasks.index');
    }
}

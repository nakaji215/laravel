<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodolistFormController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        $totalEstimateHours = $todos->sum('estimate_hour');
        return view('todolist', compact('todos', 'totalEstimateHours'));
    }

    public function createPage()
    {
        return view('todo_create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'task_name' => 'required|string',
            'task_description' => 'nullable|string',
            'assign_person_name' => 'nullable|string',
            'estimate_hour' => 'nullable|numeric',
        ]);

        $todo = new Todo();
        $todo->task_name = $request->task_name;
        $todo->task_description = $request->task_description ?? '';
        $todo->assign_person_name = $request->assign_person_name ?? '';
        $todo->estimate_hour = $request->estimate_hour ?? 0;
        $todo->save();

        return redirect('/todolist');
    }

    public function editPage($id)
    {
        $todo = Todo::find($id);
        return view('todo_edit', compact('todo'));
    }

    public function edit(Request $request)
    {
        $request->validate([
            'task_name' => 'required|string',
            'task_description' => 'nullable|string',
            'assign_person_name' => 'nullable|string',
            'estimate_hour' => 'nullable|numeric',
        ]);

        $todo = Todo::find($request->id);
        $todo->update([
            'task_name' => $request->task_name,
            'task_description' => $request->task_description ?? '',
            'assign_person_name' => $request->assign_person_name ?? '',
            'estimate_hour' => $request->estimate_hour ?? 0,
        ]);

        return redirect('/todolist');
    }

    public function delete($id)
    {
        Todo::find($id)->delete();
        return redirect('/todolist');
    }
}

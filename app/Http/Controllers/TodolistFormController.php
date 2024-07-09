<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodolistFormController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('todolist', compact('todos'));
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
        $todo->task_description = $request->task_description;
        $todo->assign_person_name = $request->assign_person_name;
        $todo->estimate_hour = $request->estimate_hour;
        $todo->save();

        return redirect('/todolist');
    }
}

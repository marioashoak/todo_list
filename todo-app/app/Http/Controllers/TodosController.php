<?php

namespace App\Http\Controllers;

use App\Http\Requests\requests\CreateTodoRequest;
use App\Http\Requests\requests\UpdateTodoRequest;
use Illuminate\Http\Request;

use App\Todo;



class TodosController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('todos.index',compact('todos'));
    }

    public function create()
    {
        return view('todos.create');
    }

    public function show($id)
    {
        $todo = Todo::findOrFail($id);

        return view('todos.show',compact('todo'));
    }

    public function store(CreateTodoRequest $request)
    {
        $todo = Todo::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'compelted'=>false
        ]);

        session()->flash('success','Todos created successfully');

        return redirect(route('todos.index'));
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit',compact('todo'));
    }

    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        $todo->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'compelted'=>false
        ]);



        session()->flash('success','Todos updated successfully');

        return redirect(route('todos.index'));


    }

    public function delete(Todo $todo)
    {
        $todo->delete();

        session()->flash('success','Todos deleted successfully');

        return redirect(route('todos.index'));
    }

    public function complete(Todo $todo)
    {
        $todo->compelted=true;
        $todo->save();
        session()->flash('success','Todos completed successfully');

        return redirect(route('todos.index'));


    }





}

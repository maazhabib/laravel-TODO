<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        return view('todos.index')->with('todos_data', Todo::all()) ;
    }

   public function show($todoId){
        return view('todos.show')->with('todo' , Todo::find($todoId));
    }

    public function create(){
        return view('todos.create');
    }

    public function store(Request $req){
        $this->validate(request(),
    [
        'name' =>'required',
        'description' =>'required'
    ]);

        $todo = new Todo();
        $todo->name = $req['name'];
        $todo->description = $req['description'];
        $todo->completed = false;
        $todo->save();
        return redirect()->route('todos.index');
    }


    public function edit($tableId){
        return view('todos.edit')->with('todo' , Todo::find($tableId));
    }


    public function update($todoId){
        $this->validate(request(),
    [
        'name' =>'required',
        'description' =>'required'
    ]);
        $todo = Todo::find($todoId);
        $todo->name = request('name');
        $todo->description = request('description');
        $todo->completed = false;
        $todo->save();
        return redirect()->route('todos.index');
    }


    public function delete($todo){
        $todo = Todo::find($todo);
        $todo->delete();

        return redirect()->route('todos.index');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todos;

class TodosController extends Controller
{
    //
	public function index(){

			return view("todos.index")->with('tasks',todos::all());
	}

	public function show($todoId){

			return view("todos.show")->with('todo',todos::find($todoId));

	}

	public function create(){

			return view("todos.create");

	}


   public function store(Request $request){

		 $this->validate(request() , [
			 'name' => 'required',
			 'description' => 'required'
		 ]);

		 $todo = new todos();
		 $todo->name = $request->name;
		 $todo->description = $request->description;
		 $todo->completed = false;
		 $todo->save();

		}

		public function edit($todoId){

			return view('todos.edit')->with('todo' , todos::find($todoId));

		}

		public function update($todoId , Request $request){

			$this->validate(request() , [
				'name' => 'required',
				'description' => 'required'
			]);

			$todo = todos::find($todoId);
			$todo->name = $request->name;
			$todo->description = $request->description;
			$todo->completed = false;
			$todo->save();

			return redirect("/todos");
		 }
}

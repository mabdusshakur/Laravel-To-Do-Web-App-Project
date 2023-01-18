<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();
        //$currUser = Auth::user()->id;

        return response()->json([
            'todos' => $todos,
            //'user_id' => $currUser,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'todos' => 'required|unique:todos|max:255',
        ]);

        $todo = Todo::create([
            'todos' => $request->get('todos'),
            'user_id' => "3",
        ]);

        return response()->json([
            'message' => 'Todo Created Success Fully',
            'todo' => $todo,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        return response()->json($todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        $validatedData = $request->validate([
            'todos' => 'required|unique:todos|max:255',
        ]);

        $todo->update([
            'todos' => $request->get('todos'),
            'user_id' => "3",
        ]);

        return response()->json([
            'message' => 'Todo Updated Successfully',
            'todo' => $todo,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Todo $todo)
    {
        $todo->delete();
        $todoId = $request->get('id');
        return response()->json([
            'message' => "Todo Deleted Successfully"
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TodoComponent extends Component
{
    public $todolists;
    public $todo;
    public $updateMode = false;
    public $todoid;

    public function addTodo()
    {
        Todo::create([
            'todos' => $this->todo,
            'user_id' => Auth::user()->id,
        ]);
        $this->reset();
    }

    public function deleteTodo($id)
    {
        Todo::find($id)->delete();
    }

    public function editeTodo($id)
    {
        $this->updateMode = true;
        $todosdb = Todo::findOrFail($id);
        $this->todo = $todosdb->todos;
        $this->todoid = $todosdb->id;
    }

    public function updateTodo()
    {
        $newTodo = Todo::find($this->todoid);
        $newTodo->update([
            'todos' => $this->todo,
        ]);
        $this->updateMode = false;
        $this->reset();
    }

    public function render()
    {
        $this->todolists = Todo::with('user')
            ->where(['user_id' => Auth::user()->id])
            ->latest()
            ->get();
        return view('livewire.todo-component');
    }
}

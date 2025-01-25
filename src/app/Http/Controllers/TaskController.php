<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    private $task;
    public function __construct(Task $task)
    {
        $this->task = $task;
    }
    public function index(){
        return view('index');
    }
    public function create(Request $request){
        $validated = $request->validated();

        $this->task->createTask($validated);

        return redirect()->route('index');
    }
}

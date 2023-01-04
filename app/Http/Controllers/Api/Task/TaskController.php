<?php


namespace App\Http\Controllers\Api\Task;

use App\Models\TaskModel;
use App\Http\Controllers\Controller;



class TaskController extends Controller
{
    
    public function __invoke()
    {

        $tasks = TaskModel::all();
        return view('task.allTask', compact('tasks'));
    }
   
}
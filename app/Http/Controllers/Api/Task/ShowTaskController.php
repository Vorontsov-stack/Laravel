<?php


namespace App\Http\Controllers\Api\Task;



use App\Models\TaskModel;
use App\Http\Controllers\Post\BaseController;



class ShowTaskController extends BaseController
{
    public function __invoke(TaskModel $task)
    {
        return view('task.showTask', compact('task'));
    }
}



<?php


namespace App\Http\Controllers\Api\Task;



use App\Models\TaskModel;
use App\Http\Controllers\Post\BaseController;



class DestroyTaskController extends BaseController
{
    public function __invoke(TaskModel $task)
    {
        $task->delete();
        return redirect()->route('allTaskView');
    }
}



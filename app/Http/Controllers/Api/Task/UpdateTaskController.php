<?php


namespace App\Http\Controllers\Api\Task;


use App\Models\TaskModel;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Controllers\Post\BaseController;



class UpdateTaskController extends BaseController
{
    public function __invoke(UpdateRequest $request, TaskModel $task)
    {
        $data = $request -> validated();

        $this -> service -> update($task, $data);

        return redirect()->route('showTask', $task->id);
    }
}



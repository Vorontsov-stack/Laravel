<?php


namespace App\Http\Controllers\Api\Task;


use App\Models\Tag;
use App\Models\Category;
use App\Models\TaskModel;
use App\Http\Controllers\Post\BaseController;



class EditTaskController extends BaseController
{
    public function __invoke(TaskModel $task)
    {
        //$categories = Category::all();
        //$tags = Tag::all();
        return view('task.editTask', compact('task'));
    }
}



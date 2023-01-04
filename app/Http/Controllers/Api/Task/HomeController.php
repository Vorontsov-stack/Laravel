<?php


namespace App\Http\Controllers\Api\Task;

use App\Http\Controllers\Controller;



class HomeController extends Controller
{
    
    public function __invoke()
    {

        return view('task.HomeTask');
    }
   
}
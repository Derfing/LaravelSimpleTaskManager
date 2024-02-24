<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function getTask($taskId)
    {
        return view('show_task', ['taskId' => $taskId]);
    }
    public function createTask()
    {
        return view('create_task');
    }
}

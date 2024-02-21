<?php

namespace App\Http\Controllers;

use App\Models\Table;
use App\Models\Task;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function get()
    {
        echo 'get';
    }

    public function post()
    {
        echo 'post';
    }
}

<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function get()
    {
        return view('test_view');
    }

    public function post()
    {
        echo 'post';
    }
}

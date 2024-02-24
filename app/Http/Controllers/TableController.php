<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function getTable($tableId)
    {
        return view('show_table', ['tableId' => $tableId]);
    }

    public function createTable()
    {
        return view('create_table');
    }
}

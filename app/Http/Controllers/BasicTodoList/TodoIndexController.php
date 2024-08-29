<?php

namespace App\Http\Controllers\BasicTodoList;

use App\Models\Todo;
use App\Http\Controllers\Controller;

class TodoIndexController extends Controller
{
    public function __invoke()
    {
        $todos = Todo::all();
        return response()->json($todos);
    }
}

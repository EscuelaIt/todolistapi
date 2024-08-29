<?php

namespace App\Http\Controllers\BasicTodoList;

use App\Models\Todo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class TodoDestroyController extends Controller
{
    public function __invoke($id)
    {
        $todo = Todo::find($id);

        if (!$todo) {
            return response()->json(['message' => 'Todo not found'], Response::HTTP_NOT_FOUND);
        }

        $todo->delete();

        return response()->json(['message' => 'Todo deleted successfully'], Response::HTTP_NO_CONTENT);
    }
}

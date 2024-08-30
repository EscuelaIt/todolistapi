<?php

namespace App\Http\Controllers\BasicTodoList;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TodoUpdateController extends Controller
{
    public function __invoke(Request $request, $id)
    {
        $todo = Todo::find($id);

        if (!$todo) {
            return response()->json(['message' => 'Todo not found'], Response::HTTP_NOT_FOUND);
        }
 
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'completed' => 'nullable|boolean',
        ]);
        if($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first()], 422);
        }

        $todo->update($request->all());

        return response()->json($todo);
    }
}

<?php

namespace App\Http\Controllers\BasicTodoList;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

/**
 * @OA\Put(
 *     path="/api/todos/{id}",
 *     summary="Update an existing todo",
 *     tags={"Todos"},
 *     @OA\Parameter(
 *         ref="#/components/parameters/acceptJsonHeader"
 *     ),
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID of the todo to be updated",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             @OA\Property(property="name", type="string", description="Name of the todo", example="Learn Laravel"),
 *             @OA\Property(property="description", type="string", description="Description of the todo", example="Complete the Laravel tutorial"),
 *             @OA\Property(property="completed", type="boolean", description="Completion status of the todo", example=false),
 *         )
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Todo updated successfully",
 *         @OA\JsonContent(ref="#/components/schemas/Todo")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Todo not found",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Todo not found")
 *         )
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Validation error",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="The name field is required.")
 *         )
 *     )
 * )
 */
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

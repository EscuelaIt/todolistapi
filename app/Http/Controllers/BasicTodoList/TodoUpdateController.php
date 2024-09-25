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
 *         ref="#/components/parameters/requestedWith"
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
 *         description="Objeto de TODO a actualizar",
 *         @OA\MediaType(
 *            mediaType="application/json",
 *            @OA\Schema(ref="#/components/schemas/Todo")
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

        $todo->name = $request->name;
        if($request->has('description')) {
            $todo->description = $request->description;
        }
        if($request->has('completed') ) {
            $todo->completed = $request->completed;
        }
        $todo->save();

        return response()->json($todo);
    }
}

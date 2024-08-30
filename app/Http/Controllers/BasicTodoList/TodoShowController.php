<?php

namespace App\Http\Controllers\BasicTodoList;

use App\Models\Todo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * @OA\Get(
 *     path="/api/todos/{id}",
 *     summary="Show a specific todo",
 *     tags={"Todos"},
 *     @OA\Parameter(
 *         ref="#/components/parameters/acceptJsonHeader"
 *     ),
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID of the todo",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="Details of the requested todo",
 *         @OA\JsonContent(ref="#/components/schemas/Todo")
 *     ),
 *     @OA\Response(
 *         response=404,
 *         description="Todo not found",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Todo not found")
 *         )
 *     )
 * )
 */
class TodoShowController extends Controller
{
    public function __invoke($id)
    {
        $todo = Todo::find($id);

        if (!$todo) {
            return response()->json(['message' => 'Todo not found'], Response::HTTP_NOT_FOUND);
        }

        return response()->json($todo);
    }
}

<?php

namespace App\Http\Controllers\BasicTodoList;

use App\Models\Todo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

/**
 * @OA\Delete(
 *     path="/api/todos/{id}",
 *     summary="Delete a specific todo",
 *     tags={"Todos"},
 *     @OA\Parameter(
 *         ref="#/components/parameters/acceptJsonHeader"
 *     ),
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         required=true,
 *         description="ID of the todo to be deleted",
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=204,
 *         description="Todo deleted successfully",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Todo deleted successfully")
 *         )
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

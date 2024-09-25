<?php

namespace App\Http\Controllers\BasicTodoList;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

/**
 * @OA\Post(
 *     path="/api/todos",
 *     summary="Create a new todo",
 *     tags={"Todos"},
 *     @OA\Parameter(
 *         ref="#/components/parameters/acceptJsonHeader"
 *     ),
 *     @OA\RequestBody(
 *         required=true,
 *         description="Objeto de TODO a crear",
 *         @OA\MediaType(
 *            mediaType="application/x-www-form-urlencoded",
 *            @OA\Schema(ref="#/components/schemas/Todo")
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Todo created successfully",
 *         @OA\JsonContent(ref="#/components/schemas/Todo")
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
class TodoStoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        if($validator->fails()) {
            return response()->json(['message' => $validator->errors()->first()], 422);
        }

        $todo = new Todo;
        $todo->name = $request->name;
        $todo->completed = false;
        if($request->description) {
            $todo->description = $request->description;
        }
        $todo->save();

        return response()->json($todo, 201);
    }
}

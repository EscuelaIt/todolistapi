<?php

namespace App\Http\Controllers\BasicTodoList;

use App\Models\Todo;
use App\Http\Controllers\Controller;


class TodoIndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/todos",
     *     summary="List all todos",
     *     tags={"Todos"},
     *     @OA\Parameter(ref="#/components/parameters/acceptJsonHeader"),
     *     @OA\Response(
     *         response=200,
     *         description="A list of todos",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Todo")
     *         )
     *     )
     * )
     */

    public function __invoke()
    {
        sleep(1); // Solo para que se pueda ver bien la típica ruedita girando en las apps frontend
        $todos = Todo::all();
        return response()->json($todos);
    }
}

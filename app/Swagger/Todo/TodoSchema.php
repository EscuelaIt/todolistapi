<?php
namespace App\Swagger\Todo;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="Todo",
 *     required={"name"},
 *     type="object",
 *     title="Todo",
 *     properties={
 *         @OA\Property(property="id", type="integer", description="Todo ID. No se requiere indicar al insertar o editar"),
 *         @OA\Property(property="name", type="string", description="Todo name"),
 *         @OA\Property(property="description", type="string", description="Todo description"),
 *         @OA\Property(property="completed", type="boolean", description="Todo completada o no"),
 *     }
 * )
 */

 class TodoSchema {
  //
 }
<?php
namespace App\Swagger\Todo;

use OpenApi\Annotations as OA;

/**
 * @OA\Schema(
 *     schema="Todo",
 *     type="object",
 *     title="Todo",
 *     properties={
 *         @OA\Property(property="id", type="integer", description="Todo ID"),
 *         @OA\Property(property="name", type="string", description="Todo name"),
 *         @OA\Property(property="description", type="string", description="Todo description"),
 *         @OA\Property(property="completed", type="boolean", description="Todo completion status"),
 *         @OA\Property(property="created_at", type="string", format="date-time", description="Creation timestamp"),
 *         @OA\Property(property="updated_at", type="string", format="date-time", description="Last update timestamp"),
 *     }
 * )
 */

 class TodoSchema {
  //
 }
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Todo;

class TodoSeeder extends Seeder
{
    public function run()
    {
        Todo::insert([
            [
                'name' => 'Learn Laravel',
                'description' => 'Complete the Laravel tutorial',
                'completed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Build a REST API',
                'description' => 'Create a RESTful API using Laravel',
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Write Documentation',
                'description' => 'Document the API endpoints',
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Test API Endpoints',
                'description' => 'Ensure all endpoints work correctly',
                'completed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Set up CI/CD',
                'description' => 'Integrate continuous integration and deployment',
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Optimize Queries',
                'description' => 'Improve the performance of database queries',
                'completed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Deploy Application',
                'description' => 'Deploy the application to a server',
                'completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Backup Database',
                'description' => 'Set up automated database backups',
                'completed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}


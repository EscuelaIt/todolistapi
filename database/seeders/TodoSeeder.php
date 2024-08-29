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
                'title' => 'Learn Laravel',
                'description' => 'Complete the Laravel tutorial',
                'is_completed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Build a REST API',
                'description' => 'Create a RESTful API using Laravel',
                'is_completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Write Documentation',
                'description' => 'Document the API endpoints',
                'is_completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Test API Endpoints',
                'description' => 'Ensure all endpoints work correctly',
                'is_completed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Set up CI/CD',
                'description' => 'Integrate continuous integration and deployment',
                'is_completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Optimize Queries',
                'description' => 'Improve the performance of database queries',
                'is_completed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Deploy Application',
                'description' => 'Deploy the application to a server',
                'is_completed' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Backup Database',
                'description' => 'Set up automated database backups',
                'is_completed' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}


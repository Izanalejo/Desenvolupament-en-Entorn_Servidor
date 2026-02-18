<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ]);

        News::create([
            'title'   => 'Laravel 12 revoluciona la Web',
            'content' => 'El nuevo framework facilita la creación de APIs...',
            'likes'   => 10
        ]);

        News::create([
            'title'   => 'PHP sigue siendo el rey del Backend',
            'content' => 'A pesar de los rumores, el 78% de la web usa PHP...',
            'likes'   => 5
        ]);
        News::create([
            'title'   => 'Algo inventado',
            'content' => 'Esta es una descripcion inventada.',
            'likes'   => 5
        ]);
        News::create([
            'title'   => 'Titulo inventado',
            'content' => 'Esta es la segunda descripcion inventada',
            'likes'   => 5
        ]);
    }
}

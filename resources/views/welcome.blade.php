<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API de todo list</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            
        </style>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="antialiased">
        <div class="navcontainer">
            <dile-nav class="mx-auto max-w-2xl">
                <h1 slot="title">API sencilla para implementar un "to do list"</h1>
            </dile-nav>
        </div>
        <div class="mx-auto max-w-2xl">
            <section class="my-8 mx-6">

                <p class="flex items-center mb-8 w-full max-w-xl">
                    <img src="/images/to-do-list.png" alt="Todo list" class="w-20 mr-6">
                    <span>
                        Este es un API sencillo para crear listas de tareas, desarrollado solamente con fines didácticos.
                    </span>
                </p>
                <dile-card title="Documentación" class="w-full max-w-xl">
                    <p class="mb-6">La documentación del API la puedes ver en:
                        <ul>
                            <li class="flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="#66dddd"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                                <a href="/api/documentation">Documentación de los endpoints del API</a>
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="#66dddd"><path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z"/></svg>
                                <a href="https://github.com/EscuelaIt/todolistapi">Repositorio con el proyecto de API en GitHub</a>
                            </li>
                            
                        </ul>
                </dile-card>

                <dile-info-box class="mt-8 w-full max-w-xl">
                    Para el mantenimiento de la base de datos se resetearán todas las tablas a las 6:00 AM, horario de Madrid.
                </dile-info-box>
                
            </section>
        </div>
    </body>
</html>

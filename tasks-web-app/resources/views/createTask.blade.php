<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <style type="text/css">

            body {
                background: whitesmoke;
                width: 100vw;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                overflow-x: hidden;
                overflow-y: hidden;
            }

            form {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            input {
                padding: 4px 8px 4px 8px;
                width: 280px;
            }

            button {
                padding: 4px 8px 4px 8px;
                width: 300px;
            }

        </style>
    </head>
    <body>
        <h1>CREATE TASK</h1>
        <form method="POST" action="{{ url('store-task') }}">
            @csrf
                <input id="title" name="title" placeholder="TITLE" type="text">
                <select id="user" name="user">
                    @foreach ($users as $user)
                        <option value="{{ $user->name }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                <select id="project" name="project">
                    @foreach ($projects as $project)
                        <option value="{{ $project->title }}">{{ $project->title }}</option>
                    @endforeach
                </select>
                <button type="submit">SUBMIT</button>
                <button type="button" onclick="window.location='{{ url('/show-task') }}'">TASKS</button>
        </form>
    </body>
</html>

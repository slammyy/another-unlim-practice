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
                width: 292px;
            }

            button {
                width: 300px;
            }

        </style>
    </head>
    <body>
        <h1>CREATE TASK</h1>
        <form method="PUT" action="{{ url('create-task') }}">
            <input id="title" placeholder="TITLE" type="text">
            <input id="user" placeholder="USER" type="text">
            <input id="project" placeholder="PROJECT" type="text">
            <button type="submit">SUBMIT</button>
        </form>
    </body>
</html>

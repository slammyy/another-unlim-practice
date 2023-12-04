<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            width: 100vw;
            height: 100vh;
            overflow-x: hidden;
            overflow-y: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background: whitesmoke;
        }

        table {
            border: 2px solid gray;
            border-collapse: collapse;
        }

        th, td {
            padding-inline: 8px;
            padding-block: 4px;
            border: 2px solid gray;
            border-collapse: collapse;
            text-align: center
        }

        tr {
            padding: 5px;
        }

        tr:nth-child(even) {
            background: whitesmoke;
        }

        tr:nth-child(odd) {
            background: white;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>USER</th>
            <th>PROJECT</th>
        </tr>
        @foreach ($collection as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->user }}</td>
                <td>{{ $item->project }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
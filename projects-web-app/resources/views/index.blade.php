<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            padding: 0px;
            margin: 0px;
        }

        body {
            background: whitesmoke;
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1vw;
        }

        input {
            font-size: 2vw;
            padding: 1vw 1.5vw 1vw 1.5vw;
            width: 50vw;
            height: 2vw;
            padding-right: 11vw;
        }

        ul {
            max-height: 12vw;
            font-size: 2vw;
            padding: 1vw;
            visibility: hidden;
            list-style: none;
            background: white;
            border: 1px solid gray;
            border-radius: 2px;
            display: flex;
            flex-direction: column;
            gap: 1vw;
            overflow: scroll;
        }

        ul > li {
            padding: 0.5vw 1vw 0.5vw 1vw;
        }

        ul > li:hover {
            background: whitesmoke;
            border-radius: width 2px;
        }
        
        button {
            position: absolute;
            align-self: flex-end;
            font-size: 2vw;
            padding: 1vw 1.5vw 1vw 1.5vw;
            border-radius: 2px;
            border: 1px solid gray;
            height: 4.22vw;
        }

    </style>
</head>
<body>
    <form method="POST" action="{{ url('store-task') }}">
        @csrf
        <input type="text" name="task" id="task">
        <ul>
            @forelse ($projects as $project)
                <li id="item-{{ $project->id }}"><b>#</b> <span id="project-{{ $project->id }}">{{ $project->title }}</span></li>
            @empty
                <li>No projects</li>
            @endforelse
        </ul>
        <button type="submit">Submit</button>
    </form>

    <script>
        let inputEl = document.querySelector('input');
        let formEl = document.querySelector('form');
        let selectEl = document.querySelector('ul');
        let items = Array.prototype.slice.call(selectEl.children);
        console.log(items);
        let project = document.getElementById('project');

        formEl.addEventListener('submit', (e) => {
            e.preventDefault();
            formEl.reset();
            selectEl.style.visibility = "hidden";
        })

        inputEl.addEventListener('input', () => {
            let inputValue = inputEl.value;
            if (inputValue.includes("#")) {
                let inputValueWithoutHashtag = inputValue.match(/^.*\#/).toString();
                inputValueWithoutHashtag = inputValueWithoutHashtag.slice(0, -1);
                console.log(inputValueWithoutHashtag);
                selectEl.style.visibility = "visible";
            } else {
                selectEl.style.visibility = "hidden";
            }
        });

        items.forEach(element => {
            element.addEventListener('click', () => {
                let text = element.textContent.slice(2);
                inputEl.value += text;
            })
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODOS</title>
    <style>
    .ani {
    color: #f5f5f5;
    text-align:center;
    font-family: 'Courier New', Courier, monospace;
    font-size: 80px;
    text-shadow:
    0px -1px 3px #fff,
    0px -2px 6px #fff,
    0px -6px 12px black,
    0px -10px 20px black;
    }

    @keyframes flicker {
        0%,

        100% {
            text-shadow:
                0 -1px 3px #fff,
                0 -2px 6px #fff ,
                0 -6px 12px black,
                0 -10px 20px black;
        }

    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <h1 class="my-5 ani">TODO APP</h1>

    <div class="container">

        <td><a href="{{ route('create.new.data') }}" class="btn btn-success ">ADD USER</a></td><br><br>
        <table class="table table-dark table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">BUTTON</th>
                <th scope="col">EDIT</th>
                <th scope="col">DELETE</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($todos_data as $todo)


                <tr>
                    <td>{{ $todo->id }}</td>
                    <td>{{ $todo->name }}</td>
                    <td>{{ $todo->description }}</td>
                    <td><a href="{{ route('todo.show', $todo->id) }}" class="btn btn-info btn-sm">VIEW</a></td>
                    <td><a href="{{ route('todo.edit' , $todo->id) }}"  class="btn btn-warning btn-sm">EDIT</a></td>
                    <td><a href="{{ route('todo.delete' , $todo->id) }}" class="btn btn-danger btn-sm">DELETE</a></td>
                </tr>
                @endforeach

            </tbody>
          </table>
    </div>
</body>
</html>

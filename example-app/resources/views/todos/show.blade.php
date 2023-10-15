<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHOW USER</title>
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

    <h1 class="my-5 ani">SHOW SINGLE USER DETAIL</h1>
    <div class="container">
        <table class="table table-dark table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">DESCRIPTION</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $todo->id }}</td>
                    <td>{{ $todo->name }}</td>
                    <td>{{ $todo->description }}</td>
                </tr>
                
            </tbody>
        </table>  <br>
        <a  class="btn btn-warning" href="{{ route('todo.edit' , $todo->id) }}">EDIT</a>
        <a  class="btn btn-danger" href="{{ route('todo.delete' , $todo->id) }}">DELETE</a>

    </div>

</body>
</html>

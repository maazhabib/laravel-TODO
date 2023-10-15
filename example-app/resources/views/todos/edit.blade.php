<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="container my-5">
        <h1>EDIT DATA</h1>
        @if($errors->any())
        <div class="alert alert-danger">

            <ul class="list-group">
                @foreach($errors->all() as $error )
                    <li class="list-group-item">
                        {{ $error }}
                    </li>

                @endforeach
            </ul>

        </div>

        @endif
        <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
            @csrf
            <div><input type="hidden" name="todo_id" value="{{ $todo->id }}"></div>
            <div class="mb-3">
              <label for="name" class="form-label">NAME</label>
              <input name="name" type="text" class="form-control" placeholder="Enter Your Name" value="{{ $todo->name }}" id="name" >
            </div>
            <div class="form-group">
                <label for="description">DESCRIPTION</label>
              <input name="description" type="text" class="form-control" placeholder="Enter Your Name" value="{{ $todo->description }}" id="description">
              </div>
              <br>
            <button type="submit" class="btn btn-success">UPDATE</button>
        </form>

    </div>


</body>
</html>

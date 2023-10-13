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
        <h1> ADD NEW DATA</h1>
        {{-- @if($errors->any())
        <div class="alert alert-danger">

            <ul class="list-group">
                @foreach($errors->all() as $error )
                    <li class="list-group-item">
                        {{ $error }}
                    </li>

                @endforeach
            </ul>

        </div>

        @endif --}}
        <form action="{{ route('add.todo.data') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">NAME</label>
              <input name="name" type="text" class="form-control" placeholder="Enter Your Name" id="name" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">DESCRIPTION</label>
                <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" placeholder="Enter A Description" rows="5"></textarea>
              </div>

              <br>
            <button type="submit" class="btn btn-success">Create Todo</button>
        </form>

    </div>


</body>
</html>

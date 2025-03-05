<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div>{{ $post->title }}</div>
        <div><a href="{{ route('post.index') }}">
                <button class="btn btn-primary">Back</button>
            </a></div>
        <div><a href="{{ route('post.edit', $post->id) }}">
                <button class="btn btn-warning">Edit</button>
            </a></div>
        <div>
            <form action="{{ route('post.destroy', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>



    </div>

</body>
</html>

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
    <a href="{{ route('post.create') }}"><button class="btn btn-success">Create</button></a>


    @foreach($posts as $post)
        <div>
            <a href="{{ route('post.show', $post->id) }}">{{ $post->id }}. {{ $post->title }}</a>
        </div>
    @endforeach

</div>


</body>
</html>

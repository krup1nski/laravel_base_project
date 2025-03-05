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

<form method="post" action="{{ route('post.store', $post->id) }}">
    @csrf
    @method('patch')
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <input type="text" name="content" class="form-control" id="content" value="{{ $post->content }}">
    </div>
    <div class="mb-3">
        <label for="img" class="form-label">Img</label>
        <input type="text" name="img" class="form-control" id="img" value="{{ $post->img }}">
    </div>
    <div class="mb-3">
        <label for="likes" class="form-label">Likes</label>
        <input type="text" name="likes" class="form-control" id="likes" value="{{ $post->likes }}">
    </div>
    <div class="mb-3">
        <label for="active" class="form-label">Active 1 or 2</label>
        <input type="text" name="active" class="form-control" id="active" value="{{ $post->active }}">
    </div>
    <button type="submit" class="btn btn-success">Edit</button>
</form>

</body>
</html>

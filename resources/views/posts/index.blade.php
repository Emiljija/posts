<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/posts/create">Create post</a>

    <h1>All posts</h1>
    @foreach ($posts as $post)
        <h2>{{ $post->name }}</h2>
        <p>{{ $post->email }}</p>
        <p>{{ $post->text }}</p>
        <a href="/posts/{{ $post->id }}">Show</a>
    @endforeach
</body>
</html>
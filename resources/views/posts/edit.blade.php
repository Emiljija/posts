<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit a post with id: {{ $post->id }}</h1>

    <form method="post" action="/posts/{{ $post->id }}/update">
        @csrf
        @method('PUT')
        <label for="name">name:</label><br>
        <input type="text" name="name" value="{{ $post->name }}"><br>

        <label for="email">e-mail:</label><br>
        <input type="text" name="email" value="{{ $post->email }}"><br>

        <label for="text">text:</label><br>
        <textarea name="text">{{ $post->text }}</textarea><br>

        <input type="submit" value="submit">
    </form>

    <a href="/posts">Cancel</a>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create new post</h1>

    <form method="post" action="/posts">
        @csrf
        <label for="name">name:</label><br>
        <input type="text" name="name"><br>

        <label for="email">e-mail:</label><br>
        <input type="text" name="email"><br>

        <label for="text">text:</label><br>
        <textarea name="text"></textarea><br>

        <input type="submit" value="submit">
    </form>

    <a href="/posts">View all posts</a>
</body>
</html>
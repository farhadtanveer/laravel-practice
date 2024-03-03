<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post create</title>
</head>
<body>
    <h1>Create New post</h1>

    <h2><a href="{{ route('post.index') }}">All Posts</a></h2>

    <form action="{{ route('post.store') }}" method="post">
    @csrf
        <input type="text" name="title" id="" placeholder="title here"> <br/>
        <textarea name="details" id="" cols="30" rows="10" placeholder="write post"></textarea> <br/>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
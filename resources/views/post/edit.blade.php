<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h1>Edit post</h1>

    <form action="{{ route('post.update', $post->id) }}" method="post">
    @csrf
    @method('PUT')
        <input type="text" value="{{ $post->title }}" name="title" id="" placeholder="title here"> <br/>
        <textarea name="details" id="" cols="30" rows="10" placeholder="write post">{{ $post->details }}</textarea> <br/>
        <button type="submit">Update</button>
    </form>
</body>
</html>
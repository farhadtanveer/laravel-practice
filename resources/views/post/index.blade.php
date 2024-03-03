<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>All posts</h1>
    <table border="1" width='100%'>
        <thead>
            <th>Serial No</th>
            <th>Title</th>
            <th>Details</th>
            <th>Action</th>
        </thead>
        <tbody>
                @foreach ($posts as $post)
                    
                
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->details }}</td>
                <td>
                    <a href="{{ route('post.show', $post->id) }}">Show ||</a>
                    <a href="{{ route('post.edit', $post->id) }}">Edit ||</a>
                    <form action="{{ route('post.delete', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
           @endforeach
            
        </tbody>
    </table>
</body>
</html>
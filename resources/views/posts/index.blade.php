<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>

<h1>All Posts</h1>

<a href="{{ route('posts.create') }}">Add Post</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
    </tr>

   @foreach($posts as $post)
<tr>
    <td>{{ $post->id }}</td>
    <td>{{ $post->title }}</td>
    <td>{{ $post->description }}</td>

    <td>
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
    </td>
     <td>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>           
    
</tr>

@endforeach

</table>

</body>
</html>
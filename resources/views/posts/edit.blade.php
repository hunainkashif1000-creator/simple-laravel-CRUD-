<form action="{{ route('posts.update', $post->id) }}" method="POST">
 @csrf
 @method('PUT')
 <input type="text" name="title" value="{{ $post->title }}">
 <textarea name="description">{{ $post->description }}</textarea>
<button type="submit">Update</button>
</form>
 
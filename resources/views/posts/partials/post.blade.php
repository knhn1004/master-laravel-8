
<h2 class="h3">
    <a href="{{ route('posts.show', ['post' => $post->id]) }}">
        {{ $post-> title }}
    </a>
</h2>

<div class="mb-3 d-flex">
    <a class="btn btn-primary mr-2" href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit</a>
    <form action="{{ route('posts.destroy', ['post' => $post['id']]) }}" method="POST">
        @csrf
        @method('DELETE')
        <div><input type="submit" value="Delete" class="btn btn-primary"></div>
    </form>
</div>

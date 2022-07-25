
<div>{{ $key }} - {{ $post['title'] }}</div>

<div>
    <form action="{{ route('posts.destroy', ['post' => $post['id']]) }}" method="POST">
        @csrf
        @method('DELETE')
        <div><input type="submit" value="Delete"></div>
    </form>
</div>

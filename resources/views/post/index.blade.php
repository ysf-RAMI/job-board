<x-layout title="Post Page">

    <p>test for post page</p>
    @foreach ($posts as $post)
        <h1> {{ $post->title }} </h1>
        <p>{{ $post->body }}</p>
        <p>{{ $post->author }}</p>
        <ul>
            @forelse ($post->comments as $comment)
                <li>
                    <strong>{{ $comment->author }}</strong>: {{ $comment->content }}
                </li>
            @empty
                <li><em>No comments yet</em></li>
            @endforelse
        </ul>




    @endforeach

</x-layout>
<x-layout title="Post Page">
    <p>{{ $post->title }}</p>
    <p>{{ $post->body }}</p>
    <p>{{ $post->author }}</p>
    </n>
    <h3>Comments</h3>
    <ul>
        @forelse ($post->comments as $comment)
            <li><strong>{{ $comment->author }}</strong>: {{ $comment->content }}</li>
        @empty
            <li><em>No comments yet</em></li>
        @endforelse
    </ul>
</x-layout>
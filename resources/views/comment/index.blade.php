<x-layout title="Comment Page">

    <p>Comments page</p>
    @foreach ($comments as $comment)
        <p>{{ $comment->author }}</p>
        <p>{{ $comment->content }}</p>
        <a href="/blog/{{ $comment->post->id }}">{{ $comment->post->title }}</a>
    @endforeach

</x-layout>
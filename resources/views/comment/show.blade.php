<x-layout title="Comment Page">
    <p>{{ $comment->title }}</p>
    <p>{{ $comment->body }}</p>
    <p>{{ $comment->author }}</p>

    @foreach ($comments as $comment)

    <p>{{ $comment->contnet }}</p>

    @endforeach

</x-layout>
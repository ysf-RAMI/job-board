<x-layout title="Comment Page">

    <p>test for comment page</p>
    @foreach ($comments as $comment)
    <h1> {{ $comment->title }} </h1>
    <p>{{ $comment->body }}</p>
    <p>{{ $comment->author }}</p>



    @endforeach

</x-layout>
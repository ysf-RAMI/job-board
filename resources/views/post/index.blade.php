<x-layout title="Post Page">

    <p>test for post page</p>
    @foreach ($posts as $post)
    <h1> {{ $post->title }} </h1>
    <p>{{ $post->body }}</p>
    <p>{{ $post->author }}</p>



    @endforeach

</x-layout>
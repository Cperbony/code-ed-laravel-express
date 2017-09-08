@extends('template')

@section('content')
    <h1>Blog</h1>
    @foreach($posts as $post)
        <h2>{{ $post -> title }}<i><small> Criado em: {{ $post->created_at }}</small></i></h2>
        <p>{{ $post -> content }}</p>
    @endforeach

@endsection
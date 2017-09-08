@extends('template')

@section('content')
    <h1>Anotações</h1>

    @foreach($notas as $nota)
        <li>{{ $nota }}</li>
    @endforeach

@endsection
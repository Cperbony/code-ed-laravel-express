@extends('template')

@section('content')
    <h1>Create New Post</h1>

    @if($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'admin.posts.store', 'method' => 'post']) !!}
    {{--Title Form Input--}}
    @include('admin.posts._form')

    <div class="form-group">
        {!! Form::label('tags', 'Tags:' , ['class' => 'control-label']) !!}
        {!! Form::textarea('tags', null, ['class' => 'form-control']) !!}
    </div>

    {{--Title Form Input--}}
    <div class="form-group">
        {!! Form::submit('Create Post', null, ['class'=>'btn btn-primary-control']) !!}
    </div>

    {!! Form::close() !!}


@endsection
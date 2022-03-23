@extends('layouts.app')

@section('content')
    <h1>Create a new Post</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class'=> 'form-control', 'placeholder' => 'Post Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('body', 'message')}}
        {{Form::textarea('body', '', ['class'=> 'form-control', 'placeholder' => 'Write your message here'])}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
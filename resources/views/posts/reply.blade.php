@extends('layouts.app')

@section('content')
    <h1>Post Your Reply</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@reply', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class'=> 'form-control', 'placeholder' => 'Post Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('body', 'message')}}
        {{Form::textarea('body', $post->body, ['class'=> 'form-control', 'placeholder' => 'Write your message here'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection
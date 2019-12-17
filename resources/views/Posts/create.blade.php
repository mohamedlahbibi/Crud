@extends('layout.app')
@section('content')
<div><h1>Create post</h1>
    {{ Form::open(['action'=>'PostController@store','method'=>'POST']) }}
    <div class="form-group">
        {{ form::label('title','Title')}}
        {{form::text('title','',['class'=>'form-control','placeholder'=>'title']   )}}
    </div>
    <div class="form-group">

        {{ form::label('body','Body')}}
        {{form::textarea('body','',['class'=>'form-control'  ,'placeholder'=>'Body text'] )}}
    </div>
    {{form::submit('submit',['class'=>'btn btn-success'])}}
{{ Form::close() }}
<a href="/posts" class="btn btn-primary">Go back</a>


@endsection
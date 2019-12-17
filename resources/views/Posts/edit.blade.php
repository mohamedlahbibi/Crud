@extends('layout.app')
@section('content')
<div><h2>Edit post</h2>
    {{ Form::open(['action'=>['PostController@update',$post->id],'method'=>'POST']) }}
    <div class="form-group">
        {{ form::label('title','Title')}}
        {{form::text('title',$post->title,['class'=>'form-control','placeholder'=>'title']   )}}
    </div>
    <div class="form-group">

        {{ form::label('body','Body')}}
        {{form::textarea('body',$post->body,['class'=>'form-control'  ,'placeholder'=>'Body text'] )}}
    </div>
    {{form::hidden('_method','PUT')}}
    {{form::submit('Modifier',['class'=>'btn btn-success'])}}
{{ Form::close() }}
<a href="/posts" class="btn btn-primary">Go back</a>


@endsection
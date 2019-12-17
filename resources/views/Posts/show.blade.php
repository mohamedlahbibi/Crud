@extends('layout.app')
@section('content')
<div>
    <h2 style="padding:8px;margin:10px;text-align:center">{{$post->title}} </h2>
</div>

<div class="card" style="padding:8px;margin:10px;">

    <h4>{{$post->body}}</h4>
    <small>written on {{$post->created_at}}</small>
    <small>last updated on {{$post->updated_at}}</small>
</div>

    <table>
        <th> <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Modify</a></th> 

        <th>
{!! Form::open(['action'=>['PostController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
{{Form::hidden ('_method','DELETE')}}
{{Form::submit('Delete',['class '=>'btn btn-danger'])}}</th>
{!! form::close()!!}
   
   <th><a href="/posts" class="btn btn-primary">Go back</a></th>

    </table>

@endsection

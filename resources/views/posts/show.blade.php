@extends('layouts.app')
@section('content')
<div class="container">
    <a href="/post" class="btn btn-success btn-lg"> Go Back</a> 
<h1>{{$post->title}}</h1>
<div class="imgResizeShow">
<img style="img-fluid rounded-circle" src="/storage/post_img/{{$post->post_img}}">
</div>
<br>
<br>
<div>
    {!!$post->body!!}
</div>
<hr>
<small>Written on {{$post->created_at}} recommended by {{$post->user->name}}</small>
<hr>
@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)
<a href="/post/{{$post->id}}/edit" class="btn btn-default">Edit Post</a>
{!!Form::open(['action' => ['PostsController@destroy', $post->id ], 'method' => 'POST', 'class' => 'pull-right'])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
@endif
@endif
</div>
@endsection

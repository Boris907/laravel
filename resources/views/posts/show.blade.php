@extends('layout')
@section('content')
    <div class="col-md-12">
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>
    </div>
    <div class="col-md-12">
       <h2>Comments:</h2>
        <ul>
        @foreach($post->comments as $comment)
            <li>{{$comment->body}}</li>
        @endforeach
        </ul>
    </div>
@stop
@extends('layout')
@section('content')
    <div class="col-md-12">
        <h2>{{$post->title}}</h2>
        @if(isset($post->picture))
            <img src="{{'/uploads/posts/'.$post->id.'/'.$post->picture}}">
        @endif
        <p>{{$post->body}}</p>
    </div>
    <div class="col-md-12 comments">
       <h2>Comments:</h2>
        <ul class="list-group">
        @foreach($post->comments as $comment)
            <li class="list-group-item">
                <strong>
                    {{$comment->created_at->diffForHumans()}}
                </strong>
                {{$comment->body}}
            </li>
        @endforeach
        </ul>
    </div>
    <hr>
    <div class="card col-md-12">
        <div class="card-block">
            <form method="post" action="/posts/{{$post->alias}}/comments">
                {{csrf_field()}}
                <div class="form-group">
                    <textarea name="body" id="" cols="10" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add comment</button>
                </div>
            </form>
            @include('posts.errors')
        </div>
    </div>
@stop
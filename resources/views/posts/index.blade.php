@extends('layout')

@section('content')

    @foreach($posts as $post)
    <div class="col-md-4">
        <h2>{{$post->title}}</h2>
        <p>{{$post->body}}</p>
        <p>{{$post->created_at->toFormattedDateString()}}</p>
        <p><a class="btn btn-default" href="/posts/{{$post->alias}}" role="button">Читать далее</a></p>
        <form action="/posts/{{$post->alias}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input type="hidden" name="id" value="{{$post->alias}}">

            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
    </div>
    @endforeach

@stop
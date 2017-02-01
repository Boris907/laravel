@extends('layout')

@section('content')
    <h2>Tasks:</h2>
    <ul>
        @foreach($tasks as $task)
            <li><a style="text-decoration: none; color: black;" href="/tasks/{{$task->id}}">{{$task->body}}</a></li>
        @endforeach
    </ul>
@stop

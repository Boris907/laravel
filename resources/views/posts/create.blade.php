@extends('layout')
@section('content')
    <div class="col-xs-6 col-xs-offset-3">
        <form method="post" action="/posts" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Заголовок</label>
                <input name="title" type="text" class="form-control" id="title" placeholder="Заголовок">
            </div>
            <div class="form-group">
                <label for="alias">Alias</label>
                <input name="alias" type="alias" class="form-control" id="alias" placeholder="Alias">
            </div>
            <div class="form-group">
                <label for="body">Статья</label>
                <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="post_file"></label>
                <input type="file" name="post_file" class="form-control">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>

           @include('posts.errors')
        </form>
    </div>
@stop
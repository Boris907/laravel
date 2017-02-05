@extends('layout')
@section('content')
    <div class="col-xs-6 col-xs-offset-3">
        <form method="post" action="/posts">
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
            <button type="submit" class="btn btn-default">Submit</button>

            @if(count($errors))
                <div class="form-group">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </form>
    </div>
@stop
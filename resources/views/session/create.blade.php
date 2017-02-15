@extends('layout')

@section('content')

    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h1>Sign in:</h1>
            <br>
            <form action="/login" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
            @include('posts.errors')
        </div>
    </div>

@endsection
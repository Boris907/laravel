<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Laravel learn</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/posts">Home</a></li>
                <li><a href="/posts/create">Add post</a></li>
                <li><a href="/tasks">Task</a></li>
                <li><a href="/about-us">Contact</a></li>
                @if(Auth::check())
                    <li class="nav-link col-lg-push-11">
                        <a class="" href="">{{Auth::user()->name}}</a>
                    </li>
                    <li class="nav-link col-lg-push-12">
                        <a class="" href="/logout">Logout</a>
                    </li>
                @else
                    <li class="nav-link col-lg-push-11"><a href="/login">Login</a></li>
                    <li class="nav-link col-lg-push-12"><a href="/register">Register</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
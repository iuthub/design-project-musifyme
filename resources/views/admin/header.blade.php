        <nav class="navbar navbar-default">
                <div class="container-fluid">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    @if(route::currentRouteNamed('users'))
                                        <li class="active">
                                    @else
                                        <li class="">
                                    @endif
                                        <a href="{{ route('users') }}">Users</a>
                                        </li>
                                    
                                    @if(route::currentRouteNamed('genres'))
                                        <li class="active">
                                    @else
                                        <li class="">
                                    @endif
                                        <a href="{{ route('genres') }}">Genres</a>
                                        </li>
                                        
                                    @if(route::currentRouteNamed('artists'))
                                        <li class="active">
                                    @else
                                        <li class="">
                                    @endif
                                        <a href="{{ route('artists') }}">Artists</a>
                                        </li>
                                        
                                    @if(route::currentRouteNamed('albums'))
                                        <li class="active">
                                    @else
                                        <li class="">
                                    @endif
                                        <a href="{{ route('albums') }}">Albums</a>
                                        </li>
                                        
                                    @if(route::currentRouteNamed('songs'))
                                        <li class="active">
                                    @else
                                        <li class="">
                                    @endif
                                        <a href="{{ route('songs') }}">Songs</a>
                                        </li>
                                </ul>
                                <form class="navbar-form navbar-right" role="search" method="GET" action="{{ route('search') }}">
                                        <div class="form-group">
                                                <input type="text" name="target" class="form-control" placeholder="Search">
                                        </div>
                                        <button type="submit" class="btn btn-default">Search</button>
                                </form>
                        </div>
                </div>
        </nav>

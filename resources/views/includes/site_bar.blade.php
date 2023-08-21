<div class="col-lg-3 tr-sidebar tr-sticky">
    <div class="theiaStickySidebar">
        <div class="tr-menu sidebar-menu">
            <nav class="navbar navbar-default navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-align-justify"></i></span>
                </button>
                <a class="navbar-brand">
                    <h3>Hunger</h3>
                </a>

                <span class="discover">Options</span>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav">
                        <li><a href="{{route('home')}}"><i class="fa fa-info-circle"
                                                                            aria-hidden="true"></i>Home</a></li>
                        <li><a data-toggle="dropdown" href="{{route('news')}}">
                                <i class="fa fa-futbol-o" aria-hidden="true"></i>
                                News Update</a>
                        </li>
{{--                        <li><a data-toggle="dropdown" href="">--}}
{{--                                <i class="fa-google-wallet" aria-hidden="true"></i>--}}
{{--                                Organization</a>--}}
{{--                        </li>--}}
                        @if(Auth::user()->type == 'admin')
                            <li><a data-toggle="dropdown" href="{{route('create.user')}}"><i
                                        class="fa fa-plus-circle" aria-hidden="true"></i>Create User</a>
                            </li>
                            <li><a href="{{route('edit.user')}}"><i class="fa-google-wallet"
                                                                    aria-hidden="true"></i>Edit
                                    User</a>
                            </li>
                            <li><a href="{{route('details.post')}}"><i class="fa fa-compass"
                                                                       aria-hidden="true"></i> Post</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav><!-- /navbar -->
        </div><!-- /left-memu -->
    </div><!-- /.theiaStickySidebar -->
</div>

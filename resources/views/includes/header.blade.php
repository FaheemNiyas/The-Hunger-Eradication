<div class="topbar-right">
    <div class="user">
        <div class="user-image">
            <img class="img-fluid img-circle" src="{{asset('assets/images/others/user.png')}}"
                 alt="Image">
        </div>
        <div class="dropdown user-dropdown">
            Hello,
            <a aria-expanded="true">{{Auth::user()->name}}<i
                    class="fa fa-caret-down"
                    aria-hidden="true"></i></a>
            <ul class="sub-menu text-left">
                {{--                                    <li><a href="#">My Profile</a></li>--}}
                {{--                                    <li><a href="#">Settings</a></li>--}}
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </div>
    </div>
    <div class="searchNlogin">
        <ul>
            <li class="search-icon"><i class="fa fa-search"></i></li>
            <li><a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a></li>
            <li class="dropdown language-dropdown">
                <a href="#" aria-expanded="true">EN<i class="fa fa-angle-down"
                                                      aria-hidden="true"></i></a>
                <ul class="sub-menu text-center">
                    <li><a href="#">EN</a></li>
                    <li><a href="#">FR</a></li>
                    <li><a href="#">GR</a></li>
                    <li><a href="#">ES</a></li>
                </ul>
            </li>
        </ul>
        <div class="search">
            <form role="form">
                <input type="text" class="search-form" autocomplete="off"
                       placeholder="Type & Press Enter">
            </form>
        </div> <!--/.search-->
    </div>
</div><!-- /.topbar-right -->

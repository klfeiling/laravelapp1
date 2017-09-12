<div class="header-top-strip">
    <div class="container">
        <div class="header-top-left">
            <p><a href="#">Customer Care</a> | <a class="play-icon popup-with-zoom-anim" href="#"> Resend Confirmation</a> </p>
        </div>
        @if (Auth::guest())
            <div class="header-top-right">
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    登陆</button>
            </div>
        @else
            <div  class="header-top-right">

                <div>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <button class="btn btn-primary" id="dropdownMenu1" data-toggle="dropdown">
                                {{ Auth::user()->sex }}{{ Auth::user()->name }}
                                <b class="caret"></b>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li><a href="information">个人信息</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        退出登录
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        @endif
    </div>
</div>
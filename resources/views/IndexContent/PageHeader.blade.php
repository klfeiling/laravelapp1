<div class="header-top-strip">
    <div class="container">
        <div class="header-top-left">
            <p><a href="#">24/7 Customer Care</a> | <a class="play-icon popup-with-zoom-anim" href="#"> Resend 		Booking Confirmation</a> </p>
        </div>
        @if (Auth::guest())
            <div class="header-top-right">
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    登陆</button>
            </div>
        @else
            <div  class="header-top-right">
                <a href="">{{ Auth::user()->name }}</a>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        @endif
    </div>
</div>
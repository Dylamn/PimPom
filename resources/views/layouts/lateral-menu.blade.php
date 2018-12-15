@section('lateral-menu')
    <div id="sideNavigation" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Features</a>
        <a href="#">Contact Us</a>
    </div>

    <nav class="topnav">
        <a href="#" onclick="openNav()">
            <svg width="30" height="30" id="icoOpen">
                <path d="M0,5 30,5" stroke="#000" stroke-width="5"></path>
                <path d="M0,14 30,14" stroke="#000" stroke-width="5"></path>
                <path d="M0,23 30,23" stroke="#000" stroke-width="5"></path>
            </svg>
        </a>
    </nav>
    <p>dsql</p>
    <div id="main">
        {{--@yield('content')--}}
    </div>
@endsection

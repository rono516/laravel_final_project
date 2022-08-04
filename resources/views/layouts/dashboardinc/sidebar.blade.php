<div class="sidebar" data-color="rose" data-background-color="black" data-image="dashboardassets/img/sidebar-1.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo">
            <a href="{{url('/')}}" class="simple-text logo-mini">
                TL
            </a>
            <a href="{{url('/')}}" class="simple-text logo-normal">
                TUKLearn
            </a>
        </div>
        <div class="sidebar-wrapper">

            <div class="user">

                <div class="photo">
                    <img src="{{url('dashboardassets/img/faces/avatar.jpg')}}" />
                </div>
                <div class="user-info">
                    <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                User Profile
                <b class="caret"></b>
              </span>
                    </a>

                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
{{--                            @auth()--}}
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> MP </span>
                                    <span class="sidebar-normal"> My Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> EP </span>
                                    <span class="sidebar-normal"> Edit Profile </span>
                                </a>
                            </li>




                            <li class="nav-item">
                                <a class="nav-link" href="{{url('logout')}}">
                                    <span class="sidebar-mini"> LO </span>
                                    <span class="sidebar-normal"> Logout </span>
                                </a>
                            </li>

                            @auth()
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('logout')}}">
                                    <span class="sidebar-mini"> LO </span>
                                    <span class="sidebar-normal"> {{auth()->user()->name}} </span>
                                </a>
                            </li>
                            @endauth
{{--                            @endauth--}}

{{--                            @guest()--}}

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('login')}}">
                                        <span class="sidebar-mini"> LI </span>
                                        <span class="sidebar-normal"> Login </span>
                                    </a>
                                </li>
{{--                            @endguest--}}
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item {{\Request::is('/dashboard') ?  active : ''}} ">
                    <a class="nav-link" href="/">
                        <!-- <i class="material-icons">dashboard</i> -->
                        <p> Dashboard </p>
                    </a>
                </li>
                <li class="nav-item {{\Request::is('/courses') ?  active : ''}} ">
                    <a class="nav-link" href="/courses">
                        <!-- <i class="material-icons">dashboard</i> -->
                        <p> Courses </p>
                    </a>
                </li>
                <li class="nav-item {{\Request::is('/modules')? 'active': ''}}">
                    <a class="nav-link" href="{{url('/modules')}}">
                        <p>Modules</p>
                    </a>

                </li>
                <li class="nav-item {{\Request::is('/lessons')? 'active': ''}}">
                    <a class="nav-link" href="{{url('lessons')}}">
                        <p>Lessons</p>
                    </a>

                </li>
                <li class="nav-item {{\Request::is('/dashboard') ?  active : ''}} ">
                    <a class="nav-link" href="{{url('questions')}}">
                        <!-- <i class="material-icons">dashboard</i> -->
                        <p> Questions </p>
                    </a>
                </li>
                <li class="nav-item {{\Request::is('/dashboard') ?  active : ''}} ">
                    <a class="nav-link" href="{{url('tests')}}">
                        <!-- <i class="material-icons">dashboard</i> -->
                        <p> Tests </p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

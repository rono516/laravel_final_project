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
                    <a class="nav-link" href="../examples/dashboard.html">
                        <!-- <i class="material-icons">dashboard</i> -->
                        <p> Questions </p>
                    </a>
                </li>
                <li class="nav-item {{\Request::is('/dashboard') ?  active : ''}} ">
                    <a class="nav-link" href="../examples/dashboard.html">
                        <!-- <i class="material-icons">dashboard</i> -->
                        <p> Tests </p>
                    </a>
                </li>
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" data-toggle="collapse" href="#pagesExamples">--}}
{{--                        <!-- <i class="material-icons">image</i> -->--}}
{{--                        <p> Pages--}}
{{--                            <b class="caret"></b>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="pagesExamples">--}}
{{--                        <ul class="nav">--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/pages/pricing.html">--}}
{{--                                    <span class="sidebar-mini"> P </span>--}}
{{--                                    <span class="sidebar-normal"> Pricing </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/pages/timeline.html">--}}
{{--                                    <span class="sidebar-mini"> T </span>--}}
{{--                                    <span class="sidebar-normal"> Timeline </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}

{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/pages/register.html">--}}
{{--                                    <span class="sidebar-mini"> RP </span>--}}
{{--                                    <span class="sidebar-normal"> Register Page </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}


{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" data-toggle="collapse" href="#formsExamples">--}}
{{--                        <!-- <i class="material-icons">content_paste</i> -->--}}
{{--                        <p> Forms--}}
{{--                            <b class="caret"></b>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="formsExamples">--}}
{{--                        <ul class="nav">--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/forms/regular.html">--}}
{{--                                    <span class="sidebar-mini"> RF </span>--}}
{{--                                    <span class="sidebar-normal"> Regular Forms </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/forms/extended.html">--}}
{{--                                    <span class="sidebar-mini"> EF </span>--}}
{{--                                    <span class="sidebar-normal"> Extended Forms </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/forms/validation.html">--}}
{{--                                    <span class="sidebar-mini"> VF </span>--}}
{{--                                    <span class="sidebar-normal"> Validation Forms </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/forms/wizard.html">--}}
{{--                                    <span class="sidebar-mini"> W </span>--}}
{{--                                    <span class="sidebar-normal"> Wizard </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" data-toggle="collapse" href="#tablesExamples">--}}
{{--                        <!-- <i class="material-icons">grid_on</i> -->--}}
{{--                        <p> Tables--}}
{{--                            <b class="caret"></b>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="tablesExamples">--}}
{{--                        <ul class="nav">--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/tables/regular.html">--}}
{{--                                    <span class="sidebar-mini"> RT </span>--}}
{{--                                    <span class="sidebar-normal"> Regular Tables </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/tables/extended.html">--}}
{{--                                    <span class="sidebar-mini"> ET </span>--}}
{{--                                    <span class="sidebar-normal"> Extended Tables </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/tables/datatables.net.html">--}}
{{--                                    <span class="sidebar-mini"> DT </span>--}}
{{--                                    <span class="sidebar-normal"> DataTables.net </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" data-toggle="collapse" href="#mapsExamples">--}}
{{--                        <!-- <i class="material-icons">place</i> -->--}}
{{--                        <p> Maps--}}
{{--                            <b class="caret"></b>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <div class="collapse" id="mapsExamples">--}}
{{--                        <ul class="nav">--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/maps/google.html">--}}
{{--                                    <span class="sidebar-mini"> GM </span>--}}
{{--                                    <span class="sidebar-normal"> Google Maps </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/maps/fullscreen.html">--}}
{{--                                    <span class="sidebar-mini"> FSM </span>--}}
{{--                                    <span class="sidebar-normal"> Full Screen Map </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item ">--}}
{{--                                <a class="nav-link" href="../examples/maps/vector.html">--}}
{{--                                    <span class="sidebar-mini"> VM </span>--}}
{{--                                    <span class="sidebar-normal"> Vector Map </span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}

            </ul>
        </div>
    </div>

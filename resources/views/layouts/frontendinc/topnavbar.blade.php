<header class="header">


    <div class="container">
        <nav class="navbar navbar-default yamm">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo-normal">
                    <a class="navbar-brand" href="{{url('/')}}"><img width="70" height="60" src="frontendassets/images/tuklogo.png" alt=""></a>
                </div>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{url('/')}}">Home</a></li>



                    @guest()

                        <li><a href="{{url('/login')}}">Login</a></li>
{{--                        <li><a href="{{url('/register')}}">Sign Up</a></li>--}}
                    @endguest



                    <li><a href="{{url('all')}}">All Courses</a></li>

                    <li><a href="{{url('/')}}">Contact</a></li>

                    @auth()
                        <li><a>{{auth()->user()->name}}</a></li>
                        <li><a href="{{url('my_courses')}}">My Courses</a></li>
                        <li><a href="{{url('/logout')}}">Logout</a></li>
{{--                    @endauth--}}

{{--                    @auth()--}}

                            @if(auth()->user()->role->has_perm([1, 2, 3]))
                                      <li><a href="{{url('/dashboard')}}">Dashboard</a></li>
                            @endif
                    @endauth

{{--                    @endif--}}
{{--                    @if(auth()->user()->role->has_perm([]))--}}
{{--                    <li class="iconitem"><a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-search"></i></a></li>--}}
{{--                    <li class="iconitem"><a class="shopicon" href="shop-cart.html"><i class="fa fa-shopping-basket"></i> &nbsp;(0)</a></li>--}}
                </ul>
            </div>
        </nav><!-- end navbar -->
    </div><!-- end container -->
</header>

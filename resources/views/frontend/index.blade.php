@extends('layouts.frontendinc.main')

@section('content')

    <section id="home" class="video-section js-height-full">
        <div class="overlay"></div>
        <div class="home-text-wrapper relative container">
            <div class="home-message">
                <p>TUK Learning Management System</p>
                <small>TukLMS aims to provide an improved interactive approach to the online learning around TUK</small>
                <div class="btn-wrapper">
                    <div class="text-center">
                        <a href="#newsandblogs" class="btn btn-primary wow slideInLeft">News And Blogs</a> &nbsp;&nbsp;&nbsp;<a href="#courses" class="btn btn-default wow slideInRight">Start Learning</a>
                    </div>
                </div><!-- end row -->
            </div>
        </div>
        <div class="slider-bottom">
            <span>Explore <i class="fa fa-angle-down"></i></span>
        </div>
    </section>



    <section id="courses" class="section gb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Recent Courses</h3>
                <p>Here is a list of some of the recent sources you will like</p>
            </div><!-- end title -->

            <div id="owl-01" class="owl-carousel owl-theme owl-theme-01">
                @foreach($courses as $course)
                <div class="caro-item">
                    <div class="course-box">
                        <div class="image-wrap entry">
{{--                            <img src="frontendassets/upload/course_01.jpg" alt="" class="img-responsive">--}}
                            <img  src="{{\Illuminate\Support\Facades\Storage::url($course->image_url)}}" alt="" >
                            <div class="magnifier">
                                <a href="{{$course->id}}" title=""><i class="flaticon-online-course"></i></a>
                            </div>
                        </div><!-- end image-wrap -->
                        <div class="course-details">
                            <h4>
{{--                                <small>Javascript</small>--}}
                                <a href="{{$course->id}}" title="">{{$course->title}}</a>
                            </h4>
                            <p>{{$course->short_description}}</p>
{{--                            <p>Fusce interdum, elit sit amet vehicula malesuada, eros libero elementum orci.</p>--}}
                        </div><!-- end details -->
                        <div class="course-footer clearfix">
                            <div class="pull-left">
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-user"></i> 21</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i> {{number_format($course->duration)}} Min.</a></li>
                                </ul>
                            </div><!-- end left -->

                            <div class="pull-right">
                                <ul class="list-inline">
                                    @if($course->price == 0)
                                        <li><a href="#">Free Course</a></li>
                                    @else
                                    <li><a href="#">Ksh {{number_format($course->price)}}</a></li>
                                    @endif
                                </ul>
                            </div><!-- end left -->
                        </div><!-- end footer -->
                    </div><!-- end box -->
                </div><!-- end col -->
                @endforeach

            </div><!-- end row -->

            <hr class="invis">

            <div class="section-button text-center">
                <a href="{{url('/all')}}" class="btn btn-primary">View All Courses</a>
            </div>
        </div><!-- end container -->
    </section>



    <section class="section db">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="stat-count">
                        <h4 class="stat-timer">50</h4>
                        <h3><i class="flaticon-black-graduation-cap-tool-of-university-student-for-head"></i> Happy Students</h3>
                        <p>50 enrolled stundets </p>
                    </div><!-- stat-count -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4">
                    <div class="stat-count">
                        <h4 class="stat-timer">50</h4>
                        <h3><i class="flaticon-online-course"></i> Courses Done</h3>
                        <p>50 courses successfully completed </p>
                    </div><!-- stat-count -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4">
                    <div class="stat-count">
                        <h4 class="stat-timer">500</h4>
                        <h3><i class="flaticon-coffee-cup"></i> Course minutes</h3>
                        <p>Over 500 minutes completed by students </p>
                    </div><!-- stat-count -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>


    <section id="newsandblogs" class="section gb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Recent News & Blogs</h3>
                <p>Have a look at some tutorials on various topics and blogs in our blog section</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="blog-box">
                        <div class="image-wrap entry">
                            <img src="frontendassets/upload/blog_01.jpeg" alt="" class="img-responsive">
                            <div class="magnifier">
                                <a href="{{url('/')}}" title=""><i class="flaticon-add"></i></a>
                            </div>
                        </div><!-- end image-wrap -->

                        <div class="blog-desc">
                            <h4><a href="{{url('/')}}">How to learn perfect code with Javascript</a></h4>
                            <p>Praesent at suscipit ligula. Suspendisse pre neque, quis suscipit enim. sed maximus, mia auctor.</p>
                        </div><!-- end blog-desc -->

                        <div class="post-meta">
                            <ul class="list-inline">
                                <li><a href="#">21 March 2017</a></li>
                                <li><a href="#">by WP Destek</a></li>
                                <li><a href="#">14 Share</a></li>
                            </ul>
                        </div><!-- end post-meta -->
                    </div><!-- end blog -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-12">
                    <div class="blog-box">
                        <div class="image-wrap entry">
                            <img src="frontendassets/upload/blog_02.jpeg" alt="" class="img-responsive">
                            <div class="magnifier">
                                <a href="{{url('/')}}" title=""><i class="flaticon-add"></i></a>
                            </div>
                        </div><!-- end image-wrap -->

                        <div class="blog-desc">
                            <h4><a href="{{url('/')}}">The most suitable web design & development tutorials</a></h4>
                            <p>Sed suscipit neque in erat posuere tristique aliquam porta vestibulum. Cras placerat tincidunt. </p>
                        </div><!-- end blog-desc -->

                        <div class="post-meta">
                            <ul class="list-inline">
                                <li><a href="#">20 March 2017</a></li>
                                <li><a href="#">by WP Destek</a></li>
                                <li><a href="#">11 Share</a></li>
                            </ul>
                        </div><!-- end post-meta -->
                    </div><!-- end blog -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-12">
                    <div class="blog-box">
                        <div class="image-wrap entry">
                            <img src="frontendassets/upload/blog_03.jpeg" alt="" class="img-responsive">
                            <div class="magnifier">
                                <a href="{{url('/')}}" title=""><i class="flaticon-add"></i></a>
                            </div>
                        </div><!-- end image-wrap -->

                        <div class="blog-desc">
                            <h4><a href="{{url('/')}}">Design for all mobile devices! This is name "responsive"</a></h4>
                            <p>Suspendisse scelerisque ex ac mattis molestie vel enim ut massa placerat faucibus sed ut dui vivamus. </p>
                        </div><!-- end blog-desc -->

                        <div class="post-meta">
                            <ul class="list-inline">
                                <li><a href="#">19 March 2017</a></li>
                                <li><a href="#">by WP Destek</a></li>
                                <li><a href="#">44 Share</a></li>
                            </ul>
                        </div><!-- end post-meta -->
                    </div><!-- end blog -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

    <section class="section bgcolor1">
        <div class="container">
            <a href="#">
                <div class="row callout">
                    <div class="col-md-4 text-center">
                        <h3><sup>Ksh</sup>500</h3>
                        <h4>Start your awesome course today!</h4>
                    </div><!-- end col -->

                    <div class="col-md-8">
                        <p class="lead">Limited time offer! SignUp for amazing courses today and get amazing offers </p>
                    </div>
                </div><!-- end row -->
            </a>
        </div><!-- end container -->
    </section>

@endsection

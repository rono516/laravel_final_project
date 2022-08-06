@extends('layouts.frontendinc.main')

@section('content')

    <section class="section lb p120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tagline-message page-title text-center">
                        <h3>{{$course->title}}</h3>
                        <ul class="breadcrumb">
                            <li><a href="{{url('all')}}">All Courses</a></li>
                            <li class="active">{{$course->title}}</li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->


    <section class="section">
        <div class="container">
            <div class=" ">
                <div class="row">
                    <div class="col-md-6 shop-media">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="image-wrap entry">
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($course->image_url)}}" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a rel="prettyPhoto[inline]" href="#" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div><!-- end image-wrap -->
                            </div>
                        </div><!-- end row -->

                        <hr class="invis">

{{--                        <div class="row">--}}
{{--                            <div class="col-md-4 col-sm-4 col-xs-4">--}}
{{--                                <div class="image-wrap entry">--}}
{{--                                    <img src="frontendassets/upload/single_shop_02.jpg" alt="" class="img-responsive">--}}
{{--                                    <div class="magnifier">--}}
{{--                                        <a rel="prettyPhoto[inline]" href="frontendassets/upload/single_shop_02.jpg" title=""><i class="flaticon-add"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div><!-- end image-wrap -->--}}
{{--                            </div>--}}

{{--                            <div class="col-md-4 col-sm-4 col-xs-4">--}}
{{--                                <div class="image-wrap entry">--}}
{{--                                    <img src="frontendassets/upload/single_shop_03.jpg" alt="" class="img-responsive">--}}
{{--                                    <div class="magnifier">--}}
{{--                                        <a rel="prettyPhoto[inline]" href="frontendassets/upload/single_shop_03.jpg" title=""><i class="flaticon-add"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div><!-- end image-wrap -->--}}
{{--                            </div>--}}

{{--                            <div class="col-md-4 col-sm-4 col-xs-4">--}}
{{--                                <div class="image-wrap entry">--}}
{{--                                    <img src="frontendassets/upload/single_shop_04.jpg" alt="" class="img-responsive">--}}
{{--                                    <div class="magnifier">--}}
{{--                                        <a rel="prettyPhoto[inline]" href="frontendassets/upload/single_shop_04.jpg" title=""><i class="flaticon-add"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div><!-- end image-wrap -->--}}
{{--                            </div>--}}
{{--                        </div><!-- end row -->--}}
                    </div><!-- end col -->

                    <div class="col-md-6">
                        <div class="shop-desc">
                            <h3>{{$course->title}}</h3>
                            @if($course->price == 0)
                                <small>Free Course</small>
                            @else
                                <small>Ksh. {{number_format($course->price)}}</small>
                            @endif

                            <p>{{$course->description}}</p>



                            <small>{{$course->title}} Modules</small>


                            @foreach($modules as $module)

                                <a href="{{url($module->title)}}">{{$module->title}}</a>

{{--                                <a href="{{$module->lessons->title}}"></a>--}}

{{--                                <br> --}}
                                <hr>



{{--                            <div class="row">--}}
{{--                                <div class="col-md-12">--}}
{{--                                    <div class="shop-extra">--}}
{{--                                        <ul class="nav nav-tabs">--}}
{{--                                            <li><a data-toggle="tab" href="#menu2">{{$module->title}}</a></li>--}}
{{--                                        </ul>--}}

{{--                                        <div class="tab-content">--}}

{{--                                            <div id="menu2" class="tab-pane fade">--}}


{{--                                                <a>{{$modules->lesson}}</a>--}}


{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div><!-- end shop-extra -->--}}
{{--                                </div><!-- end col -->--}}
{{--                            </div><!-- end row -->--}}

                            @endforeach




                            <div class="shop-meta">
{{--                                <form action="{{url('start_course')}}" method="POST">--}}
                                <form action="{{url('start_course',$course->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="course_id" value="{{$course->id}}">
                                    <button class="btn btn-primary btn-sm">Start Course</button>
                                </form>
{{--                                <a href="{{url('start_course')}}" class="btn btn-primary">Start Course</a>--}}

                            </div><!-- end shop meta -->
                        </div><!-- end desc -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

                <div class="row">
                    <div class="col-md-12">
                        <div class="shop-extra">
                            <ul class="nav nav-tabs">
                                <li><a data-toggle="tab" href="#menu2">Review</a></li>
                            </ul>

                            <div class="tab-content">

                                <div id="menu2" class="tab-pane fade">
                                    <h3>Reviews</h3>

                                    <p>Your email address will not be published</p>

                                    <div class="rating">
                                        <p>Your Rating</p>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>

                                    <hr class="invis">

                                    <form class="big-contact-form row" role="search">
                                        <div class="col-md-12">
                                            <textarea class="form-control" placeholder="Your reviews.."></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Enter your name..">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" placeholder="Enter email..">
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- end shop-extra -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis">

            </div><!-- end boxed -->
        </div><!-- end container -->
    </section>


@endsection

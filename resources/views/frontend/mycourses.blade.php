@extends('layouts.frontendinc.main')

@section('content')

    <section class="section lb p120">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tagline-message page-title text-center">
                        <h3>My Courses</h3>
                        <ul class="breadcrumb">
                            <li><a href="{{url('/')}}">TukLearn</a></li>
                            <li class="active">My Courses</li>
                        </ul>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end section -->

    <section class="section gb nopadtop">
        <div class="container">
            <div class="boxed boxedp4">
                <div class="shop-top">
                    <div class="clearfix">
                        <div class="pull-left">
                            <p> Showing {{$courses->count()}} results</p>
                        </div>
                        <div class="pull-right">
                            <select class="selectpicker">
                                <option>Price - High to Low</option>
                                <option>Price - Low to High</option>
                                <option>Newest Items</option>
                                <option>Older Items</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row blog-grid shop-grid">
                    @foreach($courses as $course)
                        <div class="col-md-3">
                            <div class="course-box shop-wrapper">
                                <div class="image-wrap entry">
                                    <img src="{{\Illuminate\Support\Facades\Storage::url($course->image_url)}}" alt="" class="img-responsive">
                                    <div class="magnifier">
                                        <a href="shop-single.html" title=""><i class="flaticon-add"></i></a>
                                    </div>
                                </div>
                                <!-- end image-wrap -->
                                <div class="course-details shop-box text-center">
                                    <h4>
                                        <a href="{{$course->id}}" title="">{{$course->title}}</a>
                                        {{--                                    <small>Bags</small>--}}
                                    </h4>
                                </div>
                                <!-- end details -->
                                <div class="course-footer clearfix">
                                    <div class="pull-left">
                                        <ul class="list-inline">
                                            <li><p> <i class="flaticon-computer-tool-for-education"></i> Progress: </p></li>
{{--                                            <i class="flaticon-online-course"></i>--}}
                                        </ul>
                                    </div><!-- end left -->

                                    <div class="pull-right">
                                        <ul class="list-inline">
                                            <li><p> X of {{$course->modules->count()}} modules</p></li>
{{--                                            @if($course->price == 0)--}}
{{--                                                <li><a href="#">Free Course</a></li>--}}
{{--                                            @else--}}
{{--                                                <li><a href="#">Ksh.{{number_format($course->price)}}</a></li>--}}
{{--                                            @endif--}}
                                        </ul>
                                    </div><!-- end left -->
                                </div><!-- end footer -->
                            </div><!-- end box -->
                        </div><!-- end col -->
                    @endforeach




                    <hr class="invis">

                </div>
            </div><!-- end container -->
    </section>

@endsection

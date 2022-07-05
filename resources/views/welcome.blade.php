<html>
<head>
    <title>Courses</title>
</head>
<body>

<div class="row">
    <div class="col-md-6">
        <div>
            <h1>Courses</h1>
        </div>
    </div>
    <div class="col-md-6">
        <div>
            <h2>List of courses</h2>

            @foreach($courses as $course)
                <a href="{{url('view',$course->id)}}">{{$course->title}}</a>
                <p>{{$course->short_description}}</p>
            <p>{{$course->description}}</p>
            <p>Modules</p>

{{--                @foreach($course_modules  as $modules)--}}


{{--            <p>{{$modules->title}}</p>--}}
{{--                @endforeach--}}


{{--            <p>{{$course->title}}</p>--}}
{{--                <p>{{$course->modules}}</p>--}}
            @endforeach


        </div>
    </div>
</div>

</body>
</html>

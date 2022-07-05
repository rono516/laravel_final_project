<html>
<head>
    <title>Course View</title>
</head>

<body>
<h1>
    {{$course->title}}
</h1>
  @foreach($modules as $module)
      <p>{{$module->title}}</p>
  @endforeach
</body>
</html>

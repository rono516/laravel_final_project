@extends('layouts.frontendinc.main')

@section('content')
<h1>
    {{$course->title}}
</h1>
  @foreach($modules as $module)
      <p>{{$module->title}}</p>
  @endforeach
@endsection

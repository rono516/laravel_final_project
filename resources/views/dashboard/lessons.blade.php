
@extends('layouts\dashboardinc\dashboardmain')
@push('js')
    <script>
        $(document).on('submit', '.del_course_form', function() {
            if (confirm('Are you sure you want to delete the category?')) {
                return true;
            }
            return false;
        });

        $(document).on('click', '.add-lesson-btn', function() {
            var _Form = $('#lesson-form');

            $('#id').val('');
            $('#title').val('');
            $('#video_url').val('');
            $('#description').val('');
            $('#image').val('');
            $('#is_active').val('');

            // set the add url
            var action = 'lesson/create';
            //console.log(action);
            _Form .attr('action', action);
            $('#lesson-modal').modal('show');
        });

        $(document).on('click', '.edit-course-btn', function() {
            var _Btn = $(this);
            var _id = _Btn.attr('item-id'),
                _Form = $('#lesson-form');

            if (_id !== '') {
                $.ajax({
                    url: _Btn.attr('source'),
                    type: 'get',
                    dataType: 'json',

                    success: function(data) {
                        console.log(data);
                        // populate the modal fields using data from the server
                        //$('#course_id').val(data['course_id']).trigger('change');;
                        $('#course_name').val(data['title']);
                        $('#id').val(data['id']);
                        $('#teacher_name').val(data['teacher']);
                        $('#description').val(data['description']);
                        $('#short_description').val(data['short_description']);
                        $('#price').val(data['price']);
                        $('#start_date').val(data['start_date']);

                        if (data['is_active'] === 1){
                            $('#is_active').prop('checked', true);
                        }else {
                            $('#is_active').prop('checked', false);
                        }


                        // set the update url
                        var action = 'course/update';
                        //console.log(action);
                        _Form .attr('action', action);

                        // open the modal
                        $('#lesson-modal').modal('show');
                    }
                });
            }
        });

    </script>
@endpush

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-icon card-header-rose">
                                <div class="card-icon">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <h4 class="card-title ">Lessons</h4>
                                <button class="btn btn-success btn-sm add-lesson-btn">
                                    Add Lesson
                                </button>
                            </div>
                            <div class="card-body">

                                @include('layouts.common.error')
                                @include('layouts.common.info')
                                @include('layouts.common.success')
                                @include('layouts.common.warnings')
                                @include('layouts.common.warning')

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">

                                        <th>
                                            Course
                                        </th>
                                        <th>
                                            Module
                                        </th>
                                        <th>
                                            Lesson
                                        </th>
                                        <th>
                                            Active
                                        </th>
                                        <th>
                                            Action
                                        </th>

                                        </thead>
                                        <tbody>
                                        @foreach($lessons as $lesson)
                                            <tr>
                                                <td>
                                                    {{$lesson->module->course->title}}

                                                </td>
                                                <td>
                                                    {{$lesson->module->title}}

                                                </td>
                                                <td>
                                                    {{$lesson->title}}
                                                </td>
                                                <td>
                                                    {{$lesson->is_active == true ? 'No' : 'Yes'}}
                                                </td>
                                                <td>
                                                    <button class="btn btn-info btn-sm edit-course-btn"
                                                            source="{{route('edit-course' ,  $lesson->id)}}"
                                                            item-id="{{$lesson->id}}">Edit</button>

                                                    <form action="{{url('course/delete')}}" style="display: inline;" method="POST"
                                                          class="del_course_form">
                                                        @csrf
                                                        <input type="hidden" name="course_id" value="{{$lesson->id}}">
                                                        <button class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="lesson-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Lesson Details</h4>
                </div>
                <div class="modal-body" >
                    <form action="{{ url('courses') }}" method="POST" id="lesson-form" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

{{--                            module-id--}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="selectpicker" data-style="select-with-transition" title="Select Module"
                                            name="module_id" id="module_id" >
                                        <option disabled> Select Module</option>
                                        @foreach(\App\Models\Module::all() as $module)
                                            <option value="{{$module->id}}">{{$module->title}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title" class="bmd-label-floating">Title</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                            </div>
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="teacher_name" class="bmd-label-floating">Teacher Name</label>--}}
{{--                                    <input type="text" class="form-control" id="teacher_name" name="teacher_name">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="video_url" class="bmd-label-floating">Video Url</label>
{{--                                <textarea id="short_description"  class="form-control" name="short_description"></textarea>--}}
                                 <input type="text" id="video_url" class="form-control" name="video_url">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label for="description" class="bmd-label-floating">Lesson text</label>
                                <textarea id="description"  class="form-control" name="description"></textarea>
                            </div>
                        </div>

{{--                        <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <label for="price" class="bmd-label-floating">Price</label>--}}
{{--                                <input type="number" id="price" name="price" class="form-control">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <label for="start_date" class="bmd-label-floating">Start date</label>--}}
{{--                                <input type="date" id="start_date" name="start_date" class="form-control">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="row">
                            <div class="col-md-6">
                                <label for="image">Select Image</label>
                                <input type="file" id="image" name="image" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <div class="togglebutton">
                                    <label class="bmd-label-floating">
                                        <input type="checkbox" name="is_active" id="is_active">
                                        <span class="toggle"></span>
                                        Is active
                                    </label>
                                </div>
                            </div>
                        </div>

                        {{--hidden fields--}}
                        <input type="hidden" name="id" id="id"/>
                        <div class="form-group">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="material-icons">close</i> Close</button>
                            <button class="btn btn-success" type="submit" id="save-brand"><i class="material-icons">save</i> Save</button>
                        </div>
                    </form>

                </div>

                <!--<div class="modal-footer">-->
                <!---->
                <!--</div>-->
            </div>
        </div>
    </div>

@endsection


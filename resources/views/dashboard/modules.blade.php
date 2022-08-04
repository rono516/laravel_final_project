
@extends('layouts\dashboardinc\dashboardmain')
@push('js')
    <script>
        $(document).on('submit', '.del_module_form', function() {
            if (confirm('Are you sure you want to delete the category?')) {
                return true;
            }
            return false;
        });

        $(document).on('click', '.add-module-btn', function() {
            var _Form = $('#module-form');

            $('#id').val('');
            $('#title').val('');
            $('#position').val('');
            $('#description').val('');

            // set the add url
            var action = 'module/create';
            //console.log(action);
            _Form .attr('action', action);
            $('#module-modal').modal('show');
        });

        $(document).on('click', '.edit-module-btn', function() {
            var _Btn = $(this);
            var _id = _Btn.attr('item-id'),
                _Form = $('#module-form');

            if (_id !== '') {
                $.ajax({
                    url: _Btn.attr('source'),
                    type: 'get',
                    dataType: 'json',

                    success: function(data) {
                        console.log(data);
                        // populate the modal fields using data from the server
                        //$('#course_id').val(data['course_id']).trigger('change');;
                        $('#course_id').val(data['course_id']).trigger('change');
                        $('#id').val(data['id']);
                        $('#title').val(data['title']);
                        $('#position').val(data['position']);
                        $('#description').val(data['']);
                        // $('#short_description').val(data['short_description']);
                        // $('#price').val(data['price']);
                        // $('#start_date').val(data['start_date']);

                        if (data['active'] === 1){
                            $('#active').prop('checked', true);
                        }else {
                            $('#active').prop('checked', false);
                        }


                        // set the update url
                        var action = 'module/update';
                        //console.log(action);
                        _Form .attr('action', action);

                        // open the modal
                        $('#module-modal').modal('show');
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
                                <h4 class="card-title ">Modules</h4>
                                <button class="btn btn-success btn-sm add-module-btn">
                                    Add Module
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
                                            Active
                                        </th>
                                        <th>
                                            Action
                                        </th>

                                        </thead>
                                        <tbody>
                                        @foreach($modules as $module)
                                            <tr>
                                                <td>
                                                    {{$module->course->title}}

                                                </td>
                                                <td>
                                                    {{$module->title}}

                                                </td>
                                                <td>
                                                    {{$module->is_active == true ? 'No' : 'Yes'}}
                                                </td>
                                                <td>
                                                    <button class="btn btn-info btn-sm edit-module-btn"
                                                            source="{{route('edit-module' ,  $module->id)}}"
                                                            item-id="{{$module->id}}">Edit</button>

                                                    <form action="{{url('module/delete')}}" style="display: inline;" method="POST"
                                                          class="del_module_form">
                                                        @csrf
                                                        <input type="hidden" name="course_id" value="{{$module->id}}">
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



    <div class="modal fade" id="module-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Module Details</h4>
                </div>
                <div class="modal-body" >
                    <form action="{{ url('modules') }}" method="POST" id="module-form" enctype="multipart/form-data">
                        @csrf

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="selectpicker" data-style="select-with-transition" title="Select Course"
                                            name="course_id" id="course_id" >
                                        <option disabled> Select Course</option>
                                        @foreach(\App\Models\Course::all() as $course)
                                            <option value="{{$course->id}}">{{$course->title}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title" class="bmd-label-floating">Module Name</label>
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
                                <label for="description" class="bmd-label-floating">Description</label>
                                <textarea id="description" name="description" class="description"></textarea>

                             </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="position" class="bmd-label-floating">Position</label>
                                <input type="number" id="position" name="position" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <div class="togglebutton">
                                    <label>
                                        <input type="checkbox" name="active" id="active">
                                        <span class="toggle"></span>
                                        Is active
                                    </label>
                                </div>
                            </div>
{{--                            <div class="col-md-12">--}}
{{--                                <label for="short_description" class="bmd-label-floating">Short description</label>--}}
{{--                                <textarea id="short_description"  class="form-control" name="short_description"></textarea>--}}
{{--                            </div>--}}
                        </div>

{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <label for="description" class="bmd-label-floating">More Description</label>--}}
{{--                                <textarea id="description"  class="form-control" name="description"></textarea>--}}
{{--                            </div>--}}
{{--                        </div>--}}

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

{{--                        <div class="row">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <label for="image">Select Image</label>--}}
{{--                                <input type="file" id="image" name="image" class="form-control">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="togglebutton">--}}
{{--                                    <label class="bmd-label-floating">--}}
{{--                                        <input type="checkbox" name="is_active" id="is_active">--}}
{{--                                        <span class="toggle"></span>--}}
{{--                                        Is active--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

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


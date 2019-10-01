@extends('backend.layouts.app')

@section('title', 'Create')

@section('content')
    {{Form::open(['url' => route('admin.category.store'), 'files' => true, 'class' => 'form-horizontal'])}}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Create Category
                        </h4>
                    </div><!--col-->
                </div><!--row-->

                <hr>

                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                        <label class="col-md-2 form-control-label">Name</label>
                            <div class="col-md-10">
                                {{Form::text('name',null,['placeholder' => 'Name','class' => 'form-control'])}}
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Status</label>

                            <div class="col-md-10">
                                <select name="status" class="form-control">
                                    <option value="">Select status</option>
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
                                </select>
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Image</label>
                            <div class="col-md-10">
                                <input type="file" name="image">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <input type="submit" name="submit" class="btn btn-success" value="submit">
                            </div><!--col-->
                        </div><!--form-group-->
                    </div><!--col-->
                </div><!--row-->
            </div><!--card-body-->
        </div><!--card-->
    {{ Form::close() }}
@endsection

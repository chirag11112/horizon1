@extends('backend.layouts.app')

@section('title', 'Create')

@section('content')
    {{ Form::model($category,['url' => route('admin.sub_category.update'),'files' => true]) }}
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        <h4 class="card-title mb-0">
                            Edit Sub Category
                        </h4>
                    </div><!--col-->
                </div><!--row-->

                <hr>

                <div class="row mt-4 mb-4">
                    <div class="col">
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Name</label>
                            <div class="col-md-10">
                                {{Form::text('name',null,['class' => 'form-control'])}}
                                {{Form::hidden('id')}}
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Category</label>
                            <div class="col-md-10">
                                {{Form::select('category_id',$categories,null,['class' => 'form-control'])}}
                            </div><!--col-->
                        </div><!--form-group-->
                        <div class="form-group row">
                            <label class="col-md-2 form-control-label">Status</label>
                            <div class="col-md-10">
                                {{Form::select('status',[1=>'Active',0=>'Inactive'],null,['class' => 'form-control'])}}
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

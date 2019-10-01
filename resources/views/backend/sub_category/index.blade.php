@extends('backend.layouts.app')

@section('title', 'Category Management')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    <a href="{{route('admin.sub_category.create')}}" class="btn btn-success">New</a>
                </h4>
            </div><!--col-->
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                </h4>
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>
                                    <img src="{{asset('uploads/category/'.$category->image)}}" style="height: 70px; width: 70px;">
                                </td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->category }}</td>
                                <td>{{ $category->status == 1 ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <a href="{{route('admin.sub_category.show',$category->id)}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('admin.sub_category.edit',$category->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="{{route('admin.sub_category.delete',$category->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">

            <div class="col-5">
                <div class="float-right">
                    {!! $categories->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection

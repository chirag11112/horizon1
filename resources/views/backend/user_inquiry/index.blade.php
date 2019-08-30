@extends('backend.layouts.app')

@section('title', 'Category Management')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
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
                            <th>Vendor Name</th>
                            <th>User Name</th>
                            <th>Comment</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; ?>
                        @foreach($vendor_inquiry as $inquiry)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $inquiry->vendor_id }}</td>
                                <td>{{ $inquiry->user_id }}</td>
                                <td>{{ $inquiry->description }}</td>
                                <td>
                                    <a href="{{route('admin.user_inquiry.show',$inquiry->id)}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                    <a href="{{route('admin.user_inquiry.delete',$inquiry->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
                    {!! $vendor_inquiry->render() !!}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection

@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Manage Sub Category
                </h4>
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4 mb-4">
            <div class="col">
                <div class="tab-content">
                    <div class="tab-pane active" id="overview" role="tabpanel" aria-expanded="true">
                        <table class="table table-hover">
                            <tr>
                                <th>Image</th>
                                <td>
                                    <img src="{{asset('uploads/category/'.$category->image)}}" style="height: 70px; width: 70px;">
                                </td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$category->name}}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{$category->category}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$category->status == 1 ? 'Active' : Inactive }}</td>
                            </tr>
                        </table>
                    </div><!--tab-->
                </div><!--tab-content-->
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection

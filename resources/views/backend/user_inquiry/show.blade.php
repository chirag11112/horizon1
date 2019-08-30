@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Manage User Inquiry
                </h4>
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4 mb-4">
            <div class="col">
                <div class="tab-content">
                    <div class="tab-pane active" id="overview" role="tabpanel" aria-expanded="true">
                        <table class="table table-hover">
                            <tr>
                                <th>Vendor Name</th>
                                <td>{{$vendor_inquiry->vendor_id}}</td>
                            </tr>
                            <tr>
                                <th>User Name</th>
                                <td>{{$vendor_inquiry->user_id}}</td>
                            </tr>
                            <tr>
                                <th>Comment</th>
                                <td>{{$vendor_inquiry->description}}</td>
                            </tr>
                        </table>
                    </div><!--tab-->
                </div><!--tab-content-->
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection

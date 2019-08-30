@extends('backend.layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    Manage Vendor Inquiry
                </h4>
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4 mb-4">
            <div class="col">
                <div class="tab-content">
                    <div class="tab-pane active" id="overview" role="tabpanel" aria-expanded="true">
                        <table class="table table-hover">
                            <tr>
                                <th>Name</th>
                                <td>{{$vendor_inquiry->vendor_id}}</td>
                            </tr>
                            <tr>
                                <th>Phone No.</th>
                                <td>{{$vendor_inquiry->contact_no}}</td>
                            </tr>
                            <tr>
                                <th>Comment</th>
                                <td>{{$vendor_inquiry->comment}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{$vendor_inquiry->status == 1 ? 'Active' : Inactive }}</td>
                            </tr>
                        </table>
                    </div><!--tab-->
                </div><!--tab-content-->
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection

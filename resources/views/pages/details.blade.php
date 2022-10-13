@extends('layouts.app2')
@section('styles')
<link type="text/css" href="assets/css/themes/default/vendor-bootstrap-datatables.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" integrity="sha256-xHkYry2yRjy99N8axsS5UL/xLHghksrFOGKm9HvFZIs=" crossorigin="anonymous"></script>
<style>
    body{
background:#f2f3f7;
margin-top:20px;
}
.m-b-30 {
    margin-bottom: 30px;
}
p{
color: #8A98AC;    
}
.table-borderless td {
    border: 0 !important;
}
.table td {
    color: #8A98AC;
    vertical-align: middle;
    border-top: 1px solid rgba(0, 0, 0, 0.03);
    padding: 0.6rem;
}
.btn-primary-rgba {
    background-color: rgba(80, 111, 228, 0.1);
    border: none;
    color: #506fe4;
}
.btn-red-rgba {
    background-color: rgba(80, 111, 228, 0.1);
    border: none;
    color: #e64843;
}
.btn-info-rgba {
    background-color: rgba(80, 111, 228, 0.1);
    border: none;
    color: #e643a7ee;
}
.btn-success-rgba {
    background-color: rgba(67, 209, 135, 0.1);
    border: none;
    color: #43d187;
}
.card {
    border: none;
    border-radius: 3px;
    background-color: #ffffff;
}
</style>

@endsection
@section('content')

<div class="container-fluid">
    

    <div class="row" id="contactlist">
        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body py-5">
                    <div class="row">
                        <div class="col-lg-3 text-center">
                            <img src="{{asset('/')}}public/assetes/contact/{{$contacts->image}}" class="img-fluid mb-3" alt="user" />
                        </div>
                        <div class="col-lg-9">
                            <h4>{{$contacts->contact_name}}</h4>
        
                            <div class="button-list mt-4 mb-3">
                                <button type="button" class="btn btn-primary-rgba"><i class="feather icon-message-square mr-2"></i>Message</button>
                                <button type="button" class="btn btn-success-rgba"><i class="feather icon-phone mr-2"></i>Call Now</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        @php
                                        $i=1;
                                         $phones=DB::table('phones')->where('contact_id',"=",$contacts->id)->get();   
                                        @endphp
                                        @foreach($phones as $row)
                                        <tr>
                                            <th scope="row" class="p-1">Phone Number {{$i++}} :</th>
                                            <td class="p-1">{{$row->phone_no}}</td>
                                        </tr>
                                        @endforeach
                                        @php
                                        $i=1;
                                         $emails=DB::table('emails')->where('contact_id',"=",$contacts->id)->get();   
                                        @endphp
                                        @foreach($emails as $row)
                                        <tr>
                                            <th scope="row" class="p-1">Email Address {{$i++}} :</th>
                                            <td class="p-1">{{$row->email_address}}</td>
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
        <!-- End col -->
        <!-- End col -->
    </div>
</div>
@endsection
@section('scripts')
<script src="assets/vendor/Chart.min.js"></script>

<script src="assets/vendor/jquery.dataTables.js"></script>
<script src="assets/vendor/dataTables.bootstrap4.js"></script>



@endsection
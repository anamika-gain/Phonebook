{{-- @extends('layouts.app')

@section('content')
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

  
<div class="container">
<div class="row">
    <!-- Start col -->
    <div class="col-lg-6">
        <div class="card m-b-30">
            <div class="card-body py-2">
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid mb-3" alt="user" />
                    </div>
                    <div class="col-lg-9 p-4">
                        <h4>John Doe</h4>
          
                        <div class="button-list mt-4 mb-3">
                            <button type="button" class="btn btn-primary-rgba"><i class="feather icon-message-square mr-2"></i>Message</button>
                            <button type="button" class="btn btn-success-rgba"><i class="feather icon-phone mr-2"></i>Call Now</button>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End col -->
    <!-- Start col -->
    <div class="col-lg-6">
        <div class="card m-b-30">
            <div class="card-body py-2">
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-fluid mb-3" alt="user" />
                    </div>
                    <div class="col-lg-9 p-4">
                        <h4>Mark Wood</h4>
                    
                        <div class="button-list mt-4 mb-3">
                            <button type="button" class="btn btn-primary-rgba"><i class="feather icon-message-square mr-2"></i>Message</button>
                            <button type="button" class="btn btn-success-rgba"><i class="feather icon-phone mr-2"></i>Call Now</button>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End col -->
    <!-- Start col -->
    <div class="col-lg-6">
        <div class="card m-b-30">
            <div class="card-body py-2">
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="img-fluid mb-3" alt="user" />
                    </div>
                    <div class="col-lg-9 p-4">
                        <h4>Kate Perry</h4>
                      
                        <div class="button-list mt-4 mb-3">
                            <button type="button" class="btn btn-primary-rgba"><i class="feather icon-message-square mr-2"></i>Message</button>
                            <button type="button" class="btn btn-success-rgba"><i class="feather icon-phone mr-2"></i>Call Now</button>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End col -->
    <!-- Start col -->
    <div class="col-lg-6">
        <div class="card m-b-30">
            <div class="card-body py-2">
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="img-fluid mb-3" alt="user" />
                    </div>
                    <div class="col-lg-9 p-4">
                        <h4>Slevenka Rajaswki</h4>
                    
                        <div class="button-list mt-4 mb-3">
                            <button type="button" class="btn btn-primary-rgba"><i class="feather icon-message-square mr-2"></i>Message</button>
                            <button type="button" class="btn btn-success-rgba"><i class="feather icon-phone mr-2"></i>Call Now</button>
                        </div>
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End col -->
</div>
</div>
@endsection --}}

@extends('layout.app')
@section('styles')
<link type="text/css" href="assets/css/themes/default/vendor-bootstrap-datatables.css" rel="stylesheet">
<style>
      .btn_round {
  width: 35px;
  height: 35px;
  display: inline-block;
  border-radius: 50%;
  text-align: center;
  line-height: 35px;
  margin-left: 10px;
  border: 1px solid #ccc;
  cursor: pointer;
}
.btn_round:hover {
  color: #fff;
  background: #6b4acc;
  border: 1px solid #6b4acc;
}

.btn_content_outer {
  display: inline-block;
  width: 85%;
}
.close_c_btn {
  width: 30px;
  height: 30px;
  position: absolute;
  right: 10px;
  top: 0px;
  line-height: 30px;
  border-radius: 50%;
  background: #ededed;
  border: 1px solid #ccc;
  color: #ff5c5c;
  text-align: center;
  cursor: pointer;
}

.add_icon {

  border: 1px dashed #aaa;
  display: inline-block;
  border-radius: 50%;

}
.add_group_btn {
  display: flex;
}
.add_group_btn i {
  font-size: 32px;
  display: inline-block;
  margin-right: 10px;
}

.add_group_btn span {
  margin-top: 8px;
}
.add_group_btn,
.clone_sub_task {
  cursor: pointer;
}

.sub_task_append_area .custom_square {
  cursor: move;
}

.del_btn_d {
  display: inline-block;
  position: absolute;
  right: 20px;
  border: 2px solid #ccc;
  border-radius: 50%;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  font-size: 18px;
}
    </style>
@endsection
@section('content')

<div class="container-fluid">
    
    <div class="card">

        <div class="card-header border-3">
            <h6 class="d-flex align-items-center justify-content-between card-title">
                <span>Tickets</span>
              
                <div class="col-lg-1" style="margin: 0px; padding:0px;">
                    <div class="form-group mg-b-10-force">
                    
                           <button id="myBtn" type="button" class="btn btn-primary " data-toggle="modal" data-target="#modaldemo3">+ New</button>
                      </div>
                    </div>
            </h6>
        </div>
        <div class="py-4">
            <div class="table-responsive">
                <div id="data-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="data-table_length"><label>Show <select name="data-table_length" aria-controls="data-table" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="data-table_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="data-table"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="data-table" class="table table-striped table-bordered dataTable" style="width: 100%;" role="grid" aria-describedby="data-table_info">
                    <thead>
                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 125px;">Id</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 193px;">contactName</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 89px;">Department</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Price</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 74px;">referral commission</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 67px;">Status</th>
                        <th class="sorting" tabindex="0" aria-controls="data-table" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 67px;">Action</th></tr>
                    </thead>
                    <tbody>
                        
                        
                   </tbody>
                    <tfoot>
                        <tr><th rowspan="1" colspan="1">Id</th><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Department</th><th rowspan="1" colspan="1">Price</th><th rowspan="1" colspan="1">referral commission
                        </th><th rowspan="1" colspan="1">Status</th><th rowspan="1" colspan="1">Action</th></tr>
                    </tfoot>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="data-table_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="data-table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="data-table_previous"><a href="#" aria-controls="data-table" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="data-table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="data-table" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="data-table_next"><a href="#" aria-controls="data-table" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="assets/vendor/Chart.min.js"></script>

<script src="assets/vendor/jquery.dataTables.js"></script>
<script src="assets/vendor/dataTables.bootstrap4.js"></script>


{{-- Edit Patients Modal --}}
<div class="modal fade" id="newTaskModal" tabindex="-1" role="dialog" aria-labelledby="newTicketModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form id="editcontact">
    
      <input type="hidden" name="_method" value="get">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="newTicketModalLabel">Add a new ticket</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>

            <div class="modal-body">
      
              <input type="hidden" type="text"  id="edit_contact_id">
              <div class="form-group">
                <label for="exampleInputEmail1">contact Name</label>
                <input type="text" class="form-control" id="newname" aria-describedby="emailHelp" placeholder="contact name" name="name">
              </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input type="text" class="form-control" id="newprice" aria-describedby="emailHelp" placeholder="Price" name="price">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Refarral Commission</label>
                <input type="text" class="form-control" id="newref_commission" aria-describedby="emailHelp" placeholder="Refarral Commission" name="ref_commission">
              </div>

              <div class="col-lg-4">
                <label class="ckbox">
                <input type="checkbox" id="newstatus" value="1">
                <span>Status</span>
                </label>
                </div>
             
       
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
              <button type="submit" class="update-contacts btn btn-primary">Sava</button>
              <p class="success"></p>
          </div>
       
      </div>
  </form>
  </div>
</div> 

<div id="modaldemo3" class="modal fade" aria-hidden="true">

    <div class="modal-dialog modal-lg p-5" role="document">

        <div class="modal-content tx-size-sm">
        <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Category Add</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
   
   
            <div class="col-md-12 form_sec_outer_task border">
                <div class="row">
                    <div class="col-md-12 form_sec_outer_task border">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                            <label for="exampleInputEmail1">contact Name</label>
                            <input type="text" class="form-control" id="category_name" aria-describedby="emailHelp" placeholder="contact name" name="name">
                          </div>
                        </div>
                        
                          <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Image:</strong>
                                <input type="file" name="image" class="form-control" placeholder="image">
                            </div>
                         </div>
                    
                        <div class="col-md-6">
                          <label>Mobile No.</label>
                        </div>
                        <div class="col-md-4">
                          <label> Type </label>
                        </div>
                      </div>
                      <div class="col-md-12 p-0">
                        <div class="col-md-12 form_field_outer p-0">
                          <div class="row form_field_outer_row">
                            <div class="form-group col-md-6">
                              <input type="text" class="form-control w_90" name="mobileb_no[]" id="mobileb_no_1" placeholder="Enter mobiel no." />
                            </div>
                            <div class="form-group col-md-4">
                              <select name="no_type[]" id="no_type_1" class="form-control">
                                <option>--Select type--</option>
                                <option>Personal No.</option>
                                <option>Company No.</option>
                                <option>Parents No.</option>
                              </select>
                            </div>
                            <div class="form-group col-md-2 add_del_btn_outer">
                              <button class="btn_round add_node_btn_frm_field" title="Copy or clone this row">
                                <i class="fas fa-copy"></i>
                              </button>
                
                              <button class="btn_round remove_node_btn_frm_field" disabled>
                                <i class="fas fa-trash-alt"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row ml-0 bg-light border py-2">
                      <div class="col-md-12">
                        <button class="btn btn-outline-lite py-0 add_new_frm_field_btn"><i class="fas fa-plus add_icon"></i> Add New field row</button>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <label>Mobile No.</label>
                      </div>
                      <div class="col-md-4">
                        <label> Type </label>
                      </div>
                    </div>
                    <div class="col-md-12 p-0">
                      <div class="col-md-12 contact_outer p-0">
                        <div class="row contact_outer_row">
                          <div class="form-group col-md-6">
                            <input type="text" class="form-control w_90" name="email_type[]" id="email_type_1" placeholder="Enter Email Address." />
                          </div>
                          <div class="form-group col-md-4">
                            <select name="email_type[]" id="email_type_1" class="form-control">
                              <option>--Select type--</option>
                              <option>Personal No.</option>
                              <option>Company No.</option>
                              <option>Parents No.</option>
                            </select>
                          </div>
                          <div class="form-group col-md-2 add_del_btn_outer">
                            <button class="btn_round add_node_btn_frm_field" title="Copy or clone this row">
                              <i class="fas fa-copy"></i>
                            </button>
              
                            <button class="btn_round remove_node_btn_frm_field" disabled>
                              <i class="fas fa-trash-alt"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row ml-0 bg-light border py-2 mr-2">
                    <div class="col-md-10">
                      <button class="btn btn-outline-lite py-0 add_new_email"><i class="fas fa-plus add_icon"></i> Add New field row</button>
                    </div>
                  </div>
             
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info pd-x-20" id="butsave">Submit</button>
                    <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
            </div>
    
           </div>
 
    </div>
    
<script type="text/javascript">
    $(document).ready(function() {
         

    //   fatchdata()
      
    //   function fatchdata() {
        
    //    $.ajax({
    //     type:"GET",
    //     url:"/all-contacts",
    //     dataType:"json",
    //     success: function(response){
    //     //  console.log(response.contacts);
    //      $('tbody').html("");
    //      $.each(response.contacts,function(key,item){

    //     $('tbody').append('<tr role="row" class="odd">\
    //             <td class="sorting_1">'+item.id+'</td>\
    //             <td>'+item.name+'</td>\
    //             <td>'+item.dept_id+'</td>\
    //             <td>'+item.price+'</td>\
    //             <td>'+item.ref_commission+'</td>\
    //             <td>'+item.status+'</td>\
    //             <td>\
    //            <button type="button" class="edit-contacts btn btn-info btn-sm " value="'+item.id+'">Edit</button>\
    //             <button type="button" class=" delete-contacts btn btn-danger btn-sm delete-link" value="'+item.id+'">Delete</button>\
    //         </td>\
    //         </tr>\
    //     ');
    //     });
    //     }

    //    });
    //  }

     
     $(document).on('click','.edit-contacts',function(e){
        e.preventDefault();
        var contact_id=$(this).val();
      
        $('#newTaskModal').modal('show');
      $.ajax({
        type:"POST",
        url:"/edit-contacts/"+contact_id,
        success:function(response){
            // console.log(response.contacts);
             $('#edit_contact_id').val(response.contacts.id);
             $('#newname').val(response.contacts.name);
             $('#newdept').val(response.contacts.dept_id);
              $('#newprice').val(response.contacts.price);
               $('#newref_commission').val(response.contacts.ref_commission);
               $('#newstatus').val(response.contacts.status);
        }
        

     });

     }); 

     $(document).on('click','.update-contacts',function(e){
        $.ajaxSetup({

     headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

     }

     });
        e.preventDefault();
        var contact_id= $('#edit_contact_id').val();
        console.log(contact_id);
        if ($('#newstatus').prop('checked')) {
             var status_n = 1;
        }else{
              var status_n = 0;
        }
        var data ={
            _token:'{{ csrf_token() }}',
            'name' : $('#newname').val(),
            'dept_id' : $('#newdept').val(),
            'price': $('#newprice').val(),
            'ref_commission': $('#newref_commission').val(),
            'status':status_n,
        }
        
        $(this).html('Updating..');
        $.ajax({
                
         
                 type: "PUT",
                 url:"/update-contacts/"+contact_id,
                 data: data,
                 datatype:'json',
                 success: function(response){
                     //alert(data);
                     $('#editcontact').trigger("reset");
                      $('#newTaskModal').modal('hide');
                      fatchdata() 
                 }
                 
                 
             });
    }); 

    $(document).on('click','.delete-contacts',function(e){
        $.ajaxSetup({

     headers: {

    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

     }

     });
        e.preventDefault();
        var contact_id=$(this).val();
        console.log(contact_id);
        $.ajax({
                 type: "POST",
                 url:"/delete-contacts/"+contact_id,
                 datatype:'json',
                 success: function(data){
                     //alert(data);
           
                      fatchdata() 
                 }
                 
                 
             });
    }); 

   
         $.ajaxSetup({
 
         headers: {
 
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
 
         }
 
         });
 
         $('#butsave').on('click', function(e) {
         
         e.preventDefault();
 
         $(this).html('Sending..');
                 $.ajax({
                 data: $('#categoryForm').serialize(),
                 url:  "{{ route('store.contact') }}",
                 type: "POST",
                 datatype:'json',
                
                 success: function(data){
                    alert(data);
                     $('#categoryForm').trigger("reset");
                      $('#modaldemo3').modal('hide');  
                 }
                 
                 
             });
   
          
         });
       });
</script>
<script type="text/javascript">
  ///======Clone method
$(document).ready(function () {
  $("body").on("click", ".add_node_btn_frm_field", function (e) {
    var index = $(e.target).closest(".form_field_outer").find(".form_field_outer_row").length + 1;
    var cloned_el = $(e.target).closest(".form_field_outer_row").clone(true);

    $(e.target).closest(".form_field_outer").last().append(cloned_el).find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false);

    $(e.target).closest(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true);

    //change id
    $(e.target)
      .closest(".form_field_outer")
      .find(".form_field_outer_row")
      .last()
      .find("input[type='text']")
      .attr("id", "mobileb_no_" + index);

    $(e.target)
      .closest(".form_field_outer")
      .find(".form_field_outer_row")
      .last()
      .find("select")
      .attr("id", "no_type_" + index);

    console.log(cloned_el);
    //count++;
  });
});
</script>
<script type="text/javascript">
    $(document).ready(function(){ $("body").on("click",".add_new_frm_field_btn", function (){ console.log("clicked"); var index = $(".form_field_outer").find(".form_field_outer_row").length + 1; $(".form_field_outer").append(`
<div class="row form_field_outer_row">
  <div class="form-group col-md-6">
    <input type="text" class="form-control w_90" name="mobileb_no[]" id="mobileb_no_${index}" placeholder="Enter mobiel no." />
  </div>
  <div class="form-group col-md-4">
    <select name="no_type[]" id="no_type_${index}" class="form-control">
      <option>--Select type--</option>
      <option>Personal No.</option>
      <option>Company No.</option>
      <option>Parents No.</option>
    </select>
  </div>
  <div class="form-group col-md-2 add_del_btn_outer">
    <button class="btn_round add_node_btn_frm_field" title="Copy or clone this row">
      <i class="fas fa-copy"></i>
    </button>

    <button class="btn_round remove_node_btn_frm_field" disabled>
      <i class="fas fa-trash-alt"></i>
    </button>
  </div>
</div>
`); $(".form_field_outer").find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false); $(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true); }); });
</script>
<script>
    $(document).ready(function () {
  //===== delete the form fieed row
  $("body").on("click", ".remove_node_btn_frm_field", function () {
    $(this).closest(".form_field_outer_row").remove();
    console.log("success");
  });
});
</script>
<script type="text/javascript">
    $(document).ready(function(){ $("body").on("click",".add_new_email", function (){ console.log("clicked"); var index = $(".contact_outer").find(".contact_outer_row").length + 1; $(".contact_outer").append(`
<div class="row contact_outer_row">
  <div class="form-group col-md-6">
    <input type="text" class="form-control w_90" name="email[]" id="emailid_${index}" placeholder="Enter Email Address." />
  </div>
  <div class="form-group col-md-4">
    <select name="email_type[]" id="email_type_${index}" class="form-control">
      <option>--Select type--</option>
      <option>Personal No.</option>
      <option>Company No.</option>
      <option>Parents No.</option>
    </select>
  </div>
  <div class="form-group col-md-2 add_del_btn_outer">
    <button class="btn_round add_node_btn_frm_field" title="Copy or clone this row">
      <i class="fas fa-copy"></i>
    </button>

    <button class="btn_round remove_node_btn_frm_field" disabled>
      <i class="fas fa-trash-alt"></i>
    </button>
  </div>
</div>
`); $(".contact_outer").find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false); $(".contact_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true); }); });
</script>
<script>
    $(document).ready(function () {
  //===== delete the form fieed row
  $("body").on("click", ".remove_node_btn_frm_field", function () {
    $(this).closest(".contact_outer_row").remove();
    console.log("success");
  });
});
</script>
@endsection
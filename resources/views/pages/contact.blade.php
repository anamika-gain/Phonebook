@extends('layout.app')
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
    
    <div class="card">

        <div class="card-header border-3">
            <h6 class="d-flex align-items-center justify-content-between card-title">
                <span>Contacts List</span>
              
                <div class="col-lg-1" style="margin: 0px; padding:0px;">
                    <div class="form-group mg-b-10-force">
                    
                           <button id="myBtn" type="button" class="btn btn-primary " data-toggle="modal" data-target="#modaldemo3">+ New</button>
                      </div>
                    </div>
            </h6>
        </div>
    </div>
    <div class="row" id="contactlist">
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
             
              <input type="hidden" type="text"  id="contact_id">
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
{{--End Edit Patients Model --}}
<!-- create Patient MODAL -->
<!--modal-->
        <!-- LARGE MODAL -->
        <div id="modaldemo3" class="modal fade" aria-hidden="true">
            <form action="{{route('store.contact')}}" method="post" enctype="multipart/form-data" id="form">
                @csrf
             <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content tx-size-sm">
                
                    <div class="modal-header pd-x-20">
                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Contact Add</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
           
       
                   
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
                        <div class="table-responsive">  
                            <table class="table table-bordered" id="dynamic_field">  
                                 <tr>  
                                      <td width="1000px"><input type="text" name="phone_no[]" placeholder="Enter Phone Number" class="form-control name_list" /></td>  
                                      <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                 </tr>  
                            </table>  
                       </div>
                       <div class="table-responsive">  
                        <table class="table table-bordered" id="dynamic_field2">  
                             <tr>  
                                  <td width="1000px"><input type="text" name="email[]" placeholder="Enter your Name" class="form-control name_list" /></td>  
                                  <td><button type="button" name="addemail" id="addemail" class="btn btn-success">Add More</button></td>  
                             </tr>  
                        </table>  
                   </div>
                       
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info pd-x-20" id="butsave">Submit</button>
                  <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
                </div>
            </form>
              </div>
            </div><!-- modal-dialog -->
          </div><!-- modal -->
          
<script type="text/javascript">
    $(document).ready(function() {
         
        var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $('#addemail').click(function(){  
           i++;  
           $('#dynamic_field2').append('<tr id="row'+i+'"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      }); 

      $(document).on('click','#addfavlist',function(e){
            e.preventDefault();
            var contact_id =$(this).val();
            console.log(contact_id);
            if (contact_id) {
                $.ajax({
                    url: "{{ url('/add/favlist/') }}/" + contact_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        })

                        if ($.isEmptyObject(data.error)) {
                            Toast.fire({
                                type: 'success',
                                title: data.success
                            })
                        } else {
                            Toast.fire({
                                type: 'error',
                                title: data.error
                            })
                        }

                    },

                });
            }
         
        });
      fatchdata()
      
      function fatchdata() {
        
       $.ajax({
        type:"GET",
        url:"/allcontacts",
        dataType:"json",
        success: function(response){
          console.log(response.contacts);
         $('#contactlist').html("");
       //  console.log(response.contacts);
         $.each(response.contacts,function(key,item){

        $('#contactlist').append( `   <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body py-1">
                    <div class="row">
                        <div class="col-lg-3 text-center p-2">
                            <img src="{{asset('/')}}public/assetes/contact/${item.image}" class="img-fluid mb-3" alt="user" />
                        </div>
                        <div class="col-lg-9 p-4">
                            <h4>${item.contact_name}</h4>
              
                            <div class="button-list mt-4 mb-3">
                                
                                <button type="button" id="addfavlist" class=" btn btn-info-rgba " value=${item.id} ><i class="feather icon-message-square mr-2"></i>Fevorite</button>
                                <button type="button" class="edit-contacts btn btn-primary-rgba"  value=${item.id}><i class="feather icon-phone mr-2"></i>Edit</button>
                            </div>
                            <div class="button-list mt-4 mb-3">
                                <button type="button" class="see-details btn btn-success-rgba"  value=${item.id}><i class="feather icon-message-square mr-2"></i>See Detail</button>
                                <button type="button" class="delete-contacts btn btn-red-rgba"  value=${item.id}><i class="feather icon-phone mr-2"></i>Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>` );
        });
        }

       });
     }

     
$(document).on('click','.see-details',function(e){
    e.preventDefault();
    var contact_id=$(this).val();

location.replace("http://127.0.0.1:8000/see-details/"+contact_id)


});


 $(document).on('click','.edit-contacts',function(e){
    
    e.preventDefault();
    var contact_id=$(this).val();
    
    location.replace("http://127.0.0.1:8000/edit-contacts/"+contact_id)
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
 
         $('#form').on('submit', function(e) {
         
         e.preventDefault();
 
        //  $(this).html('Sending..');
         var form = this;
        $.ajax({
            url:$(form).attr('action'),
            method:$(form).attr('method'),
            data:new FormData(form),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
                $(form).find('span.error-text').text('');
            },
            success:function(data){
                
                 
                  $('#modaldemo3 ').modal('hide');
                     $(form)[0].reset();
                    fatchdata() 
                }
            });
        });
    });
</script>


<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}','Error',{
        closeButton:true,
        progressBar:true,
    });
    @endforeach
    @endif
</script>
@endsection
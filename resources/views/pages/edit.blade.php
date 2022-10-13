@extends('layouts.app2')
@section('styles')
<link type="text/css" href="assets/css/themes/default/vendor-bootstrap-datatables.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js" integrity="sha256-xHkYry2yRjy99N8axsS5UL/xLHghksrFOGKm9HvFZIs=" crossorigin="anonymous"></script>
<style>



</style>

@endsection
@section('content')

<div class="container-fluid">
    
    @if (Session::get('success'))
    <div class="alert alert-twitter alert-dismissable show" role="alert">
        <p>  {{Session::get('success')}}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif


        <div class="col-lg-6">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                    
                        <form method="post" action="{{ url('update-contacts/'. $contacts->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                     
                                <div class="card-header ">
                                <h6 class=" tx-uppercase tx-inverse tx-bold">Edit Contact</h6>
                                </div>
                       
                            <div class="card" role="document">
                                    <div class="card-content">
                               
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">contact Name</label>
                                        <input type="text" class="form-control" id="category_name" aria-describedby="emailHelp" placeholder="contact name" name="name" value="{{$contacts->contact_name}}">
                                      </div>
                                    </div>
                                    
                                      <div class="col-xs-12 col-sm-12 col-md-12">
                                        

                                        <div class="form-controls">
                                            <input class="input-file uniform_on" name="newimage" type="file"
                                                placeholder="image">
                                            <img src="{{asset('/')}}public/assetes/contact/{{$contacts->image}}"
                                                style="height: 70px; width: 90px;">
                                            <input type="hidden" name="oldimage" value="{{ $contacts->image }}">
                                        </div>
                                    </div>
                                    <input id="contactID" type="hidden" value="{{$contacts->id}}">
                                   
                         
                                    <tr>

                                        <div class="table-responsive">  
                                            <table class="table table-bordered" id="dynamic_field3">  
                                                 <tr>  
                                                      <td width="1000px"><input type="text" name="phone_no[]" placeholder="Enter Phone Number" class="form-control name_list" /></td>  
                                                      <td><button type="button" name="addaa" id="add11" class="delete-phone btn btn-danger" >Delete</button></td>  
                                                 </tr>  
                                            </table>  
                                       </div>
                                    </tr>

                                    <tr>

                                        <div class="table-responsive">  
                                            <table class="table table-bordered" id="dynamic_field4">  
                                                 <tr>  
                                                      <td width="1000px"><input type="text" name="email[]" placeholder="Enter Phone Number" class="form-control name_list" /></td>  
                                                      <td><button type="button" name="add" id="addss" class="btn btn-danger">Delete</button></td>  
                                                 </tr>  
                                            </table>  
                                       </div>
                                    </tr>
                                 
                                    <tr>

                                        <div class="table-responsive">  
                                            <table class="table table-bordered" id="dynamic_field">  
                                                 <tr>  
                                                      <td width="1000px"><input type="text" name="phone_no[]" placeholder="Enter Phone Number" class="form-control name_list"/></td>  
                                                      <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                                                 </tr>  
                                            </table>  
                                       </div>
                                    </tr>
                                    
                                    <tr>

                                   <div class="table-responsive">  
                                    <table class="table table-bordered" id="dynamic_field2">  
                                         <tr>  
                                              <td width="1000px"><input type="text" name="email[]" placeholder="Enter your Name" class="form-control name_list" /></td>  
                                              <td><button type="button" name="addemail" id="addemail" class="btn btn-success">Add More</button></td>  
                                         </tr>  
                                    </table>  
                                  </div>
                                </tr>
                            <div class="card-footer">
                              <button type="submit" class="btn btn-info pd-x-20" id="butsave">Update</button>
                              <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="card">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
     

</div>
@endsection
@section('scripts')
<script src="assets/vendor/Chart.min.js"></script>

<script src="assets/vendor/jquery.dataTables.js"></script>
<script src="assets/vendor/dataTables.bootstrap4.js"></script>

<div class="modal fade" id="newTaskModal" tabindex="-1" role="dialog" aria-labelledby="newTicketModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form id="editpatient">
      
        <input type="hidden" name="_method" value="get">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newTicketModalLabel">Edit Phone Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        
              <div class="modal-body">
               
                <input type="hidden" type="text"  id="edit_phone_id">
                  <div class="form-group">
                    <div class="form-group">
                        <label for="description" class="mr-1"> Phone </label>
                        <input type="text" class="form-control" name="phone_no" id="newphone" placeholder="Enter Phone Number">
                    </div>
                   
                </div>
         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="update-phone btn btn-primary">Update</button>
                <p class="success"></p>
            </div>

        </div>
    </form>
    </div>
</div> 
<div class="modal fade" id="newTaskModal2" tabindex="-1" role="dialog" aria-labelledby="newTicketModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <form id="editpatient">
      
        <input type="hidden" name="_method" value="get">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newTicketModalLabel">Edit Email Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        
              <div class="modal-body">
               
                <input type="hidden" type="text"  id="edit_mail_id">
                  <div class="form-group">
                    <div class="form-group">
                        <label for="description" class="mr-1"> Email</label>
                        <input type="text" class="form-control" name="name" id="newmail" placeholder="Enter Email address">
                    </div>
                   
                </div>
         
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <button type="submit" class="update-phone btn btn-primary">Update</button>
                <p class="success"></p>
            </div>

        </div>
    </form>
    </div>
</div>
<script>  
    $(document).ready(function(){  
                
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
         $('#submit').click(function(){            
              $.ajax({  
                   url:"name.php",  
                   method:"POST",  
                   data:$('#add_name').serialize(),  
                   success:function(data)  
                   {  
                        alert(data);  
                        $('#add_name')[0].reset();  
                   }  
              });  
         });  
    });  


    fatchdata()
    fatchemail()
      function fatchdata() {
     
        var contact_id=$('#contactID').val();
     
       $.ajax({
        type:"GET",
        url:"/allphone/"+contact_id,
        dataType:"json",
        success: function(response){
          console.log(response.phones);
         $('#dynamic_field3').html("");
       //  console.log(response.contacts);
         $.each(response.phones,function(key,item){

        $('#dynamic_field3').append( ` <tr>  
          <td width="800px"><input type="text" name="phone_no[]" placeholder="Enter Phone Number" class="form-control name_list" value= ${item.phone_no} /></td>  
           <td><button type="button" name="addaa" id="add11" class="delete-phone btn btn-danger" value= ${item.id} >Delete</button></td>  
       
        </tr> ` );
        });
        }

       });
     }

    

      
      function fatchemail() {
     
        var contact_id=$('#contactID').val();
     
       $.ajax({
        type:"GET",
        url:"/allemail/"+contact_id,
        dataType:"json",
        success: function(response){
          console.log(response.emails);
         $('#dynamic_field4').html("");
       //  console.log(response.contacts);
         $.each(response.emails,function(key,item){

        $('#dynamic_field4').append( `<tr>  
            <td width="800px"><input type="text" name="email[]" placeholder="Enter Phone Number" class="form-control name_list" value=${item.email_address} /></td>  
            <td><button type="button" name="add" id="addss" class="delete-email btn btn-danger" value= ${item.id} >Delete</button></td> 
             
        </tr>   ` );
        });
        }

       });
     }
     $(document).on('click','.edit-mail',function(e){
        e.preventDefault();
        var e_id=$(this).val();
        $('#newTaskModal2').modal('show');
        $.ajax({
            type:"POST",
            url:"/edit-mail/"+e_id,
            success:function(response){
                console.log(response);
                $('#edit_mail_id').val(response.email.id);
                $('#newmail').val(response.email.email_address);
            
            }
        });

     }); 

     $(document).on('click','.edit-phone',function(e){
        e.preventDefault();
        var phone_id=$(this).val();
        $('#newTaskModal').modal('show');
        $.ajax({
            type:"POST",
            url:"/edit-phone/"+phone_id,
            success:function(response){
                console.log(response);
                $('#edit_phone_id').val(response.phone.id);
                $('#newphone').val(response.phone.phone_no);
            
            }
        });

     }); 


     $(document).on('click','.update-phone',function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        e.preventDefault();
        var user_id= $('#edit_phone_id').val();
        console.log(user_id);
       
        var data ={
            _token:'{{ csrf_token() }}',
            'phone_no' : $('#newphone').val(),
  
           
        }
        
        $(this).html('Updating..');
        $.ajax({
            type: "PUT",
            url:"/update-income/"+user_id,
            data: data,
            datatype:'json',
            success: function(response){
                //alert(data);
                $('#editpatient').trigger("reset");
                 $('#newTaskModal').modal('hide');
                 fatchdata() 
            }
        });
    }); 


    $(document).on('click','.delete-phone',function(e){
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
                 url:"/delete-phone/"+contact_id,
                 datatype:'json',
                 success: function(data){
                     //alert(data);
           
                      fatchdata() 
                 }
                 
                 
             });
            });
             $(document).on('click','.delete-email',function(e){
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
                 url:"/delete-email/"+contact_id,
                 datatype:'json',
                 success: function(data){
                     //alert(data);
           
                      fatchemail() 
                 }
                 
                 
             });
    }); 
    </script>
@endsection
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
    <div class="row" id="contactlist">
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
    </div>
</div>
@endsection
@section('scripts')
<script src="assets/vendor/Chart.min.js"></script>
<script src="assets/vendor/jquery.dataTables.js"></script>
<script src="assets/vendor/dataTables.bootstrap4.js"></script>

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

<script type="text/javascript">
  
      fatchdata()
      
      function fatchdata() {
        
       $.ajax({
        type:"GET",
        url:"/allfavlist",
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
                                <button type="button" class="btn btn-success-rgba"  value=${item.FavID}><i class="feather icon-message-square mr-2"></i>See Detail</button>
                                <button type="button" class="delete-fav btn btn-red-rgba"  value=${item.FavID}><i class="feather icon-phone mr-2"></i>Delete from Favourite</button>
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

    $(document).on('click','.delete-fav',function(e){
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
                 url:"/delete-fav/"+contact_id,
                 datatype:'json',
                 success: function(response){
                 
           console.log(response);
                    toastr.success(response.success);
                  
                        fatchdata() 
                 }
                 
                 
             });
    }); 
   

</script>
<script>
    @if (Session::has('messege'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('messege') }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
    @endif
</script>
@endsection
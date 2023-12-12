@extends('../layouts/backend_layout')

@section('title','User Page')

@section('content')
<div class="col-lg-12 stretch-card">
  @include('sweetalert::alert')
  
    <div class="card">
      <div class="card-body">

           
  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
   @endif

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('users.index') }}" enctype="multipart/form-data"> Back</a>
    </div>

<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="User Name" required>
               @error('name')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User Image:</strong>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

               @error('image')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>User Email:</strong>
                 <input type="email" name="email" class="form-control" placeholder="User Email" required>
                @error('email')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <label for="role">Role:</label>
              <select name="role" id="role" class="form-control" required>
                  <option value="">--Select Role--</option>
                  <option value="1">Super Admin</option>
                  <option value="2">Admin</option>
                  <option value="3">User</option>
                  <option value="4">Customer</option>
              </select>
              @error('role')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
              @enderror
          </div>
      </div>      

        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
   
</form>
        
      </div>
    </div>
  </div>
@endsection

@push('css')

<link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
@endpush

@push('js')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
     
  $(document).ready( function () {
   $.ajaxSetup({
     headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
   });
     $('#datatable-crud').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('users-list') }}",
            columns: [
                     { data: 'id', name: 'id' },
                     { data: 'name', name: 'name' },
                     { data: 'email', name: 'email' },
                     { data: 'created_at', name: 'created_at' },
                     {data: 'action', name: 'action', orderable: false},
                  ],
                  order: [[0, 'desc']]
        });
 
     $('body').on('click', '.delete', function () {
 
        if (confirm("Delete Record?") == true) {
         var id = $(this).data('id');
          
         // ajax
         $.ajax({
             type:"POST",
             url: "{{ url('delete-user') }}",
             data: { id: id},
             dataType: 'json',
             success: function(res){
 
               var oTable = $('#datatable-crud').dataTable();
               oTable.fnDraw(false);
            }
         });
        }
 
      });
   });
 
</script>

{{-- //collapse --}}
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;
    
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
          content.style.display = "none";
        } else {
          content.style.display = "block";
        }
      });
    }
</script>
    
@endpush


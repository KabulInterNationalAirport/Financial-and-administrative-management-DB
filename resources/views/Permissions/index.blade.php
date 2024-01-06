@extends('layout.master')
@section('contents')
<div class="app-content main-content">
<div class="side-app main-container">
<div class="row">
      <div class="col-11">
          <div class="card">
            <div class="card-body border-bottom">
                <div class="d-flex align-items-center">
                    <h5 class="mb-1 card-title flex-grow-1">Permissions List</h5>
                    <div class="flex-shrink-0">
                        <a href="{{route('permissions.create')}}" class="btn btn-success"> <i class="bx bx-plus-circle font-size-16 align-middle me-2"></i> Add New Permission</a>
                   
                    </div>
                </div>
            </div>
            
             @if(session('success'))
                <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            {{ session('success') }}
            </div>
            
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            {{ session('error') }}
            @endif
              <div class="card-body">
                  <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                      <thead>
                      <tr>
                          <th>ID</th>
                          <th>Name</th>
                          
                          <th>Action</th>
                      </tr>
                      </thead>


                      <tbody>
                        @foreach ($permissions as $permission)
                            
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$permission->name}}</td>
                               
                                <td>
                                    <ul class="list-unstyled hstack gap-1 mb-1">
                                        <a class="btn btn-primary btn-icon btn-sm" aria-label="Edit" href="{{route('permissions.edit',encrypt($permission->id))}}">
                                                <i class="feather feather-edit" data-bs-toggle="tooltip"></i>
                                            </a>
                                            <li data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Delete">
                                            <a href="#jobDelete" data-bs-toggle="modal" onclick="setVal(`{{encrypt($permission->id)}}`)"  class="btn btn-sm btn-danger"><i class="feather feather-trash-2"></i></a>
                                        </li>
                                    </ul>
                                </td>
                               
                            </tr>
                        @endforeach
                     
                      </tbody>
                  </table>

              </div>                          

          </div>
      </div> <!-- end col -->
  </div> <!-- end row -->
  <div class="modal fade" id="jobDelete" tabindex="-1" aria-labelledby="jobDeleteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-body px-4 py-5 text-center">
                <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <form action="{{route('permissions.destroy')}}" method="POST">
                    @csrf
                
                        <div class="avatar-sm mb-4 mx-auto">
                            <div class="avatar-title bg-light text-primary bg-opacity-10 font-size-20 rounded-3">
                            <i class="fas fa-exclamation-triangle" style="color: red; size:10px;"></i>
                                <input type="hidden" name="deleted_id" id="deleted_id">
                            </div>
                        </div>
                        <p class="text-muted font-size-16 mb-4">Are you sure you want to permanently erase the permission.</p>
                        
                <div class="hstack gap-2 justify-content-center mb-1">
                    <button type="submit" class="btn btn-danger">Delete Now</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
            </div>
        </div>
    </div>
  </div>
  </div>
</div>
@endsection
<script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>    
  <!-- DataTables -->
  <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

  <!-- Responsive datatable examples -->
  <link href="{{asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />  
  <style>
    .f-18{
        font-size: 18px;
        color: #00ff0d;
    }
  </style>

<script>

    function setVal(id){
        $('#deleted_id').val(id);
    }
</script>



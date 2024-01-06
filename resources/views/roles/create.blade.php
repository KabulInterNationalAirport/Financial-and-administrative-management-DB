@extends('layout.master')
@section('title','Create New Role')
@section('contents')
<div class="app-content main-content">
<div class="side-app main-container">
<div class="row">
      <div class="col-11">
    <div class="card">
      <div class="card-body">
        <h4 class="mb-4 card-title">Create New Role</h4>
    
          <div class="row justify-content-center">
            
              <div class="col-xl-6">
                <div class="card">
                  <div class="card-body">
          
                    <form action="{{ route('roles.store') }}" method="POST">
                      @csrf
                    
                      <div class="mb-4 row">
                        <label for="name-input" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name-input" name="name" placeholder="Enter Role Name" value="{{ old('name') }}">
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="phone-input" class="col-sm-3 col-form-label">Permissions</label>
                        <div class="col-sm-9">
                             @foreach ($permissions as $permission)
                              <div class="form-check form-switch">
                                  <input id="link-checkbox" type="checkbox" name="permission[]"
                                      value="{{ $permission->name }}"
                                      class="form-control form-check-input">
                                  <label for="link-checkbox"
                                      class="form-check-label">{{ $permission->name }}</label>
                              </div>
                          @endforeach
                             @error('permission')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                    
                      <!-- Add more form fields here -->
                    
                      <div class="row">
                        <div class="col-sm-12 border-top">
                          <button type="submit" class="m-2 btn btn-primary waves-effect waves-light"><i class="align-middle bx bx-check-double font-size-16 me-2"></i> Submit</button>
                          <button type="reset" class="m-2 btn btn-light waves-effect waves-light"> <i class="align-middle bx bx-loader bx-spin font-size-16 me-2"></i> Reset  </button>
                          <a class="m-2 btn btn-dark waves-effect waves-light" href="{{route('roles.index')}}"> <i class="align-middle bx bx-log-out-circle font-size-16 me-2"></i> Back  </a>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- end card body -->
                </div>
                <!-- end card -->
            
            </div>
          </div>

      </div>
    </div>
  </div>
</div>
</div>
</div>
@endsection

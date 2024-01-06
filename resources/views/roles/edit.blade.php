@extends('layout.master')
@section('title','Edit Role')
@section('contents')
<div class="app-content main-content">
<div class="side-app main-container">
<div class="row">
    <div class="col-11">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-4">Edit Role</h4>
    
          <div class="row justify-content-center">
            
              <div class="col-xl-6">
                <div class="card">
                  <div class="card-body">
                    <form action="{{ route('roles.update', encrypt($role->id)) }}" method="POST">
                      @csrf
                      @method('PUT')
                    
                      <div class="row mb-4">
                        <label for="name-input" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name-input" name="name" placeholder="Enter Role Name" value="{{ old('name', $role->name) }}">
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>

                      <div class="row mb-4">
                        <label for="phone-input" class="col-sm-3 col-form-label">Permissions</label>
                        <div class="col-sm-9">
                             @foreach ($permissions as $permission)
                              <div class="form-check form-switch">
                                  <input id="link-checkbox" type="checkbox" name="permission[]"
                                  {{ in_array($permission->id, $rolepermissions) ? 'checked="checked"' : '' }}
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
                          <button type="submit" class="btn btn-primary waves-effect waves-light m-2"><i class="bx bx-check-double font-size-16 align-middle me-2"></i> Submit</button>
                          <a class="btn btn-dark waves-effect waves-light m-2" href="{{route('roles.index')}}"> <i class="bx bx bx-log-out-circle font-size-16 align-middle me-2"></i> Back  </a>
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

@extends('layout.master')
@section('title','Create New User')
@section('contents')
<div class="app-content main-content">
<div class="side-app main-container">
<div class="row">
    <div class="col-11">
    <div class="card">
      <div class="card-body">
        <h4 class="mb-4 card-title">Create New User</h4>
    
          <div class="row justify-content-center">
            
              <div class="col-xl-6">
                <div class="card">
                  <div class="card-body">
          
                    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                    
                      <div class="mb-4 row">
                        <label for="name-input" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name-input" name="name" placeholder="Enter User Name" value="{{ old('name') }}">
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="name-input" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="name-input" name="email" placeholder="Enter Email" value="{{ old('email') }}">
                          @error('email')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="name-input" class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control @error('phone') is-invalid @enderror" id="name-input" name="phone" placeholder="Enter Phone" value="{{ old('phone') }}">
                          @error('phone')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="name-input" class="col-sm-3 col-form-label">Photo</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control @error('photo') is-invalid @enderror" id="name-input" name="photo" placeholder="Enter" value="{{ old('photo') }}">
                          @error('photo')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="name-input" class="col-sm-3 col-form-label">Role</label>
                        <div class="col-sm-9">
                          <select id="role" name="roles[]" multiple='multiple' class="form-select form-select-sm" aria-label=".form-select-sm example">
                            @foreach ($roles as $role)
                             <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                         </select>
                          @error('roles[]')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="name-input" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="name-input" name="password" placeholder="Enter password" value="{{ old('password') }}">
                          @error('password')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                      <div class="mb-4 row">
                        <label for="name-input" class="col-sm-3 col-form-label">Confirm Password</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="name-input" name="password_confirmation" placeholder="Confirm Password" value="{{ old('password') }}">
                          @error('password_confirmation')
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
                          <a class="m-2 btn btn-dark waves-effect waves-light" href="{{route('users.index')}}"> <i class="align-middle bx bx-log-out-circle font-size-16 me-2"></i> Back  </a>
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

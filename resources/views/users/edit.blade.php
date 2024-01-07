@extends('layout.master')
@section('title','User Update')
@section('contents')
<div class="app-content main-content">
<div class="side-app main-container">
<div class="row">
    <div class="col-11">
    <div class="card">
      <div class="card-body">
        <h4 class="mb-4 card-title">Update Role</h4>
    
          <div class="row justify-content-center">
            
              <div class="col-xl-6">
                <div class="card">
                  <div class="card-body">
                    <form action="{{ route('users.update', encrypt($user->id)) }}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                    
                      <div class="mb-4 row">
                        <label for="name-input" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name-input" name="name" placeholder="Enter User Name" value="{{ old('name', $user->name) }}">
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
                          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email-input" name="email" placeholder="Enter User email" value="{{ old('email', $user->email) }}">
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
                          <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone-input" name="phone" placeholder="Enter User phone" value="{{ old('phone', $user->phone) }}">
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
                          <input type="file" class="form-control @error('photo') is-invalid @enderror" id="name-input" name="photo" >
                          @error('photo')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                    <div class="flex-shrink-0 m-4 text-center ">
                  <img src="{{$user->photo ?  asset('storage/' . $user->photo) : 
                    asset('storage/photos/User-Profile-PNG-Picture.png')
                   }}"
                    alt="User Photo" class="img-fluid"
                    style="width: 180px; border-radius: 10px;">
                </div>
                     <div class="mb-4 row">
                        <label for="name-input" class="col-sm-3 col-form-label">Role</label>
                        <div class="col-sm-9">
                            <select name="roles[]" multiple class="form-select form-select-sm">
                        @foreach($roles as $roleValue => $roleName)
                            <option value="{{ $roleValue }}" {{ in_array($roleValue, $userRole) ? 'selected' : '' }}>
                                 {{ $roleName }}
                            </option>
                        @endforeach
                    </select>
                          @error('roles[]')
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>
                      </div>
                       <div class="row">
                        <div class="col-sm-12 border-top">
                          <button type="submit" class="m-2 btn btn-primary waves-effect waves-light"><i class="align-middle bx bx-check-double font-size-16 me-2"></i> Update</button>
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

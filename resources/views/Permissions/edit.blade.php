@extends('layout.master')
@section('title','Edit Permission')
@section('contents')
<div class="app-content main-content">
<div class="side-app main-container">
<div class="row">
    <div class="col-11">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-4">Edit Permission</h4>
    
          <div class="row justify-content-center">
            
              <div class="col-xl-6">
                <div class="card">
                  <div class="card-body">
                    <form action="{{ route('permissions.update', encrypt($permission->id)) }}" method="POST">
                      @csrf
                      @method('PUT')
                    
                      <div class="row mb-4">
                        <label for="name-input" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name-input" name="name" placeholder="Enter Your Name" value="{{ old('name', $permission->name) }}">
                          @error('name')
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
                          <a class="btn btn-dark waves-effect waves-light m-2" href="{{route('permissions.index')}}"> <i class="bx bx bx-log-out-circle font-size-16 align-middle me-2"></i> Back  </a>
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

@extends('layout.master')
@section('title','User Infomarion')
@section('contents')
<div class="page-content">
  <div class="container-fluid">
<section class="vh-100" >
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-150">
        <div class="col col-md-9 col-lg-7 col-xl-5">
          <div class="card" style="border-radius: 15px;">
            <div class="p-4 card-body">
              <div class="text-black d-flex">
                <div class="flex-shrink-0">
                  <img src="{{$user->photo ?  asset('storage/' . $user->photo) : 
                    asset('storage/photos/User-Profile-PNG-Picture.png')
                   }}"
                    alt="User Photo" class="img-fluid mt-5"
                    style="width: 200px; border-radius: 10px;">
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5 class="mb-1">{{ $user->name }}</h5>
                <div class="p-2 mb-2 d-flex justify-content-start rounded-3"
                    style="background-color: #efefef;">
                    <div>
                      <span class="mb-1 text-muted">   <i class="bx bx-envelope"></i>  Email :</span>
                      <span class="mb-0">{{ $user->email }} </span>
                    </div>
                  </div>
                   <div class="p-2 mb-2 d-flex justify-content-start rounded-3"
                    style="background-color: #efefef;">
                    <div>
                      <span class="mb-1 text-muted"> <i class="fas fa-user"></i> Role :</span>
                       @if (!empty($user->getRoleNames()))
                        @foreach ($user->getRoleNames() as $userRole)
                            <span>{{ $userRole}}</span>
                        @endforeach
                    @endif
                      
                    </div>
                  </div>


                  <div class="p-2 mb-2 d-flex justify-content-start rounded-3"
                    style="background-color: #efefef;">
                    <div>
                      <span class="mb-1 text-muted">   <i class="fas fa-phone-square"></i>  Phone :</span>
                      <span class="mb-0">{{ $user->phone }} </span>
                    </div>
                  </div>
                  <div class="pt-1 d-flex">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary me-1 flex-grow-1">Back</a>                               
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>
@endsection
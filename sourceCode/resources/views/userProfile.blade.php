@extends('layouts.header')
@section('content')

<div class="container mb-5 mt-5 pt-3">

    <div class="row gutters-sm mt-5 pt-5">
      <div class="col-md-4 d-none d-md-block">
        <div class="card">
          <div class="card-body">
            <nav class="nav flex-column nav-pills nav-gap-y-1">
              <a href="#profile" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded active">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Profile Information
              </a>
              <a href="#security" data-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield mr-2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>Reservations
              </a>
            
            </nav>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card">
          <div class="card-body tab-content">
            <div class="tab-pane active" id="profile">
              <h6>YOUR PROFILE INFORMATION</h6>
              <hr>
              <form method="post"
               {{-- action="{{route('user.updateUserProfile',Auth::user()->id)}}" --}}
               >
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="fullName">Full Name</label>
                  <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter name" value="{{ Auth::user()->name  }}" >
                  <small id="fullNameHelp" class="form-text text-muted">Your name may appear around here where you are mentioned. You can change or remove it at any time.</small>
                </div>
              
                    <div class="form-group">
                      <label for="fullName">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ Auth::user()->email  }}" name="email" disabled>
                    </div>
                    <div class="form-group">
                        <label for="fullName">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required >
                      </div>
               
                <button type="submit" class="btn" style="background-color: #dfa974;color:white">Update Profile</button>
              </form>
            </div>
            <div class="tab-pane" id="security" >
                <h6>Reservations</h6>
                <hr>
                <div style="display: flex;flex-direction: column;align-items: center">
              {{-- @foreach ($rooms as $room )
                <div class="card d-flex mb-4"  style="width:fit-content;flex-direction: row">
                    <img class="card-img-top" src="{{$room->img}}" alt="Card image cap" style="width: 8rem">
                    <div class="card-body">
                        <div class="card-text">
                            <p>{{ $room->name }}</p>
                            <div style="color: rgb(110, 108, 108);">{{ $room->price }}JD</div>
                            <div style="color: rgb(141, 140, 140);font-size: 0.8em">check-in:{{Str::substr($room->check_in,0,11)}}</div>
                            <div style="color: rgb(141, 140, 140);font-size: 0.8em">check-out:{{Str::substr($room->check_out,0,11)}}</div>
                        </div>
                    </div>
                  </div>
              @endforeach --}}
                </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>

  </div>

  

    @endsection
</body>

</html>
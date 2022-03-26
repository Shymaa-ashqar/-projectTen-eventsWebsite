@extends('layouts.header')
@section('content')

<div class="container mt-5 mb-5">
    <div class="row p-1 mt-5 pt-5">
        <div class="col-4">
            <img style="height: 28vh" class="card-img-top" src="{{$event->img}}" alt="Card image cap">
        </div>
        <div class="col-6" style="display: flex;align-items: center">
           <p>{{$event->description}}</p>
      </div>
    </div>

    <div class="Services-form">
        <form className="form" onSubmit={handleFormSubmit}>
          <input
            placeholder="Username"
            type="text"
            name="username"
            id="username"
          />
          <input
            placeholder="Phone number"
            type="tel"
            name="phone"
            id="phone"
          />
          <input
            placeholder="Email"
            type="email"
            name="email"
            id="email"
          />
          <input
            type="date"
            name="start"
            min={minDate}
          />
          <input
            type="time"
            name="hours"
          />
          <div className="submit">
            <input type="submit" value="Book Now " />
          </div>
        </form>
      </div>
</div>

@endsection
</body>
</html>
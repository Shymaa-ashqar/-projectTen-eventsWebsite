@extends('layouts.header')
@section('content')

<div class="container mt-5 mb-5">
    <div class="row p-1 mt-5 pt-5">
        <div class="col-5 w-100" style="display: flex;align-items: center">
            <img style=" ;width: 100%" class="card-img-top" src="{{$event->img}}" alt="Card image cap">
        </div>
        
        <div class="col-6 w-100 mt-5" style="display: flex;flex-direction: column">
            <h1 style="font-size: 2.5em;color:rgb(145, 117, 81);font-family: 'Franklin Gothic Medium', 'Arial Narrow', 'Arial, sans-serif'">{{$event->name}}</h1>
          <p>{{$event->description}}</p>
          <p><i style="color: rgb(145, 117, 81)" class="fa-solid fa-calendar-days"></i>  {{$event->date}} </p>
          <p><i style="color: rgb(145, 117, 81)" class="fa-solid fa-location-pin"></i>  {{$event->location}} </p>
          <p> <i style="color: rgb(145, 117, 81)" class="fa-solid fa-tag"></i> <span style="font-size: 1.5em;color:rgb(105, 103, 103);font-weight: bold"> {{$event->price}} JD</span> </p>
      </div>
    </div>
    <div class="Services-form mt-5">
      <form  method="post" action="{{route('book',$event->id)}}" className="form" >
        @csrf
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
        placeholder="Quantity"
          type="number"
          name="quantity"
        />
        <div className="submit">
          <input type="submit" value="Book Now" />
        </div>
      </form>
    </div>
</div>

@endsection
</body>
</html>
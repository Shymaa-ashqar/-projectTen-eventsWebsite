@extends('layouts.header')
@section('content')
{{-- background --}}
<div class="background">
  <div class="mr-3">
  <h1>We can't wait to welcome you</h1>
  <button type="button" class="btn btn-secondary mt-4">See what's new</button>
  </div>
</div>

{{-- Explore --}}
<div class="container">
  <div class="text-center mt-5">
    <h2 style="font-size: 2em;color:rgb(145, 117, 81);font-family: 'Franklin Gothic Medium', 'Arial Narrow', 'Arial, sans-serif'">Explore</h2>
    <p class="mt-3" style="color: gray">Jordan is a country of hikers and historians, scientists and artists, foodies and yoga-fiends. Whatever your tribe, you’ll find a kindred spirit here.</p>
  </div>
  
  <div style="display: flex;justify-content: space-around;flex-wrap: wrap;" >
    @foreach($events as $event)
    <div class="explore-card mt-5 mb-5">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{$event->img}}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$event->name}}</h5>
            <p class="card-text">{{$event->description}}</p>
            <div>
                <a href="#" class="btn btn-light">Book</a>
            <a href="#" class="btn btn-light"><i class="fa-regular fa-heart"></i></a>
            </div>
        </div>
        </div>              
    </div> 
    @endforeach                
</div>
  
</div>

{{-- essntials --}}
<div class="container mt-5">
  <div class="text-center mt-5">
    <h2 style="font-size: 2em;color:rgb(145, 117, 81);font-family: 'Franklin Gothic Medium', 'Arial Narrow', 'Arial, sans-serif'">Essentials</h2>
    <p class="mt-3" style="color: gray">plan your trip now to experience the vibrancy of contrasts that is Jordan</p>
  </div>
  <div style="display: flex;justify-content: space-around" class="mb-5 mt-5">
    <div class="essentials-card"> 
      <i class="fa-solid fa-passport fa-3x"></i>
      <h3 class="mt-3">The Jordan Pass</h3>
      <hr>
    </div>

      <div class="essentials-card"> 
        <i class="fa-solid fa-comment-dots fa-3x"></i>
        <h3 class="mt-3 text-center">Virtual travel <br> assistant</h3>
        <hr>
      </div>

        <div class="essentials-card"> 
          <i class="fa-solid fa-circle-check fa-3x"></i>
          <h3 class="mt-3">Travel safe</h3>
          <hr>
         </div>

          <div class="essentials-card"> 
            <i class="fa-solid fa-map-location-dot fa-3x"></i>
            <h3 class="mt-3">Getting Around</h3>
            <hr>
          </div>

</div>



@endsection

  
</body>
</html>
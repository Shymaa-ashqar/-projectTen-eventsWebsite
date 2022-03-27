@extends('layouts.header')
@section('content')
<div  >
    <div class="gal" style="background-image: url(https://international.visitjordan.com/uploads/experiences/b7c097c0-d6c9-430f-8fea-92ca085d9c09..jpg)
    ;height: 30em;background-attachment: fixed;  background-size: cover;">
    </div>
</div>
<div class="container mt-5 mb-2">
    <div class="text-center mt-5">
        <h2 style="font-size: 2em;color:rgb(145, 117, 81);font-family: 'Franklin Gothic Medium', 'Arial Narrow', 'Arial, sans-serif'">Discover Jordan</h2>
        <p class="mt-3" style="color: gray">Jordan is a country of hikers and historians, scientists and artists, foodies and yoga-fiends. 
          <br>Whatever your tribe, you’ll find a kindred spirit here.</p>
      </div>

      <div class="search-sort">
        <div class="icons">
        
        </div>
        <div class="sort">
          <form method="GET" action="{{route('search')}}">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="eventName">
          </form>
        </div>
      </div>
 <div  class="booking-categories-card"> 
          <div class="categories mt-5 col-md-2 col-sm-12" >
              <h4 style=" color: rgb(145, 117, 81);">Categories</h4>
              <li style="list-style-type:none;">   <a style="color: gray" href="/category/{{0}}">All</a></li>
              @foreach($categories as $category)
              <li style="list-style-type:none;">   <a style="color: gray" href="/category/{{$category->id}}">{{$category->name}}</a></li>
              @endforeach
            </div>
         <div class="events-cards col-md-10 col-sm-12" style="display: flex;justify-content: space-between;flex-wrap: wrap" >
            @foreach($events as $event)
            <div class="explore-card mt-5 mb-5">
                <div class="card" style="width: 18rem;">
                <img style="height: 28vh" class="card-img-top" src="{{$event->img}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style=" color: rgb(145, 117, 81);">{{$event->name}}</h5>
                    <p class="card-text"></p>
                    <div>
                        <a href="/events/{{$event->id }}"  class="btn btn-light">Book Now</a>
                    </div>
                </div>
                </div>              
            </div> 
            @endforeach                
        </div>

</div>
     
</div>
@endsection
  
</body>
</html>
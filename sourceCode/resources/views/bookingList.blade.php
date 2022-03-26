@extends('layouts.header')
@section('content')
<div  >
    <div class="gal" style="background-image: url(https://international.visitjordan.com/uploads/experiences/b7c097c0-d6c9-430f-8fea-92ca085d9c09..jpg)
    ;height: 30em;background-attachment: fixed;  background-size: cover;">
    </div>
</div>
<div class="container mt-5 mb-2">
    <div class="text-center mt-5">
        <h2 style="font-size: 2em;color:rgb(145, 117, 81);font-family: 'Franklin Gothic Medium', 'Arial Narrow', 'Arial, sans-serif'">Social wall</h2>
        <p class="mt-3" style="color: gray">See what other travelers are doing in Jordan right now and if you use #VisitJordan
           <br> on your social media posts you might see yourself up here too!</p>
      </div>

      <div class="search-sort">
        <div class="icons">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </div>
        <div class="sort">
          <div>Sort By </div>
          <select >
            <option value="All">Default</option>
            <option value="low">price low to High </option>
            <option value="high">price High to low </option>
          </select>
        </div>
      </div>
 <div class="row"> 
          <div class="categories mt-5 col-2" >
              <h4 style=" color: rgb(145, 117, 81);">Categories</h4>
              <li style="list-style-type:none;">   <a style="color: gray" href="">All</a></li>
              @foreach($categories as $category)
              <li style="list-style-type:none;">   <a style="color: gray" href="#">{{$category->name}}</a></li>
              @endforeach
            </div>
         <div class="events-cards col-10" style="display: flex;justify-content: space-between;flex-wrap: wrap" >
            @foreach($events as $event)
            <div class="explore-card mt-5 mb-5">
                <div class="card" style="width: 18rem;">
                <img style="height: 28vh" class="card-img-top" src="{{$event->img}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style=" color: rgb(145, 117, 81);">{{$event->name}}</h5>
                    <p class="card-text"></p>
                    <div>
                        <a href="/events/{{$event->id }}"  class="btn btn-light">Book</a>
                    <a href="#" class="btn btn-light"><i class="fa-regular fa-heart"></i></a>
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
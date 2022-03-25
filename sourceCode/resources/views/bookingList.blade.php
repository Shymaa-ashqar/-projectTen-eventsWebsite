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
              <h4>Categories</h4>
              <p>All</p>
              @foreach($categories as $category)
              <p>{{$category->name}}</p>
              @endforeach
               </div>
        <div class="events-cards col-10" >
            <div class="explore-card mt-5 mb-5">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/ex1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Jordan Trail</h5>
                    <p class="card-text">hike history.touch time.</p>
                    <div>
                        <a href="#" class="btn btn-light">Book</a>
                    <a href="#" class="btn btn-light"><i class="fa-regular fa-heart"></i></a>
                    </div>
                </div>
                </div>
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/ex2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Downtown Amman</h5>
                    <p class="card-text">in the footsteps of myths and men</p>
                    <div>
                    <a href="#" class="btn btn-light">Book</a>
                    <a href="#" class="btn btn-light"><i class="fa-regular fa-heart"></i></a>
                </div>
                </div>
                </div>
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/ex3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Dead Sea</h5>
                    <p class="card-text">life at your own pace.</p>
                    <div>
                    <a href="#" class="btn btn-light">Book</a>
                    <a href="#" class="btn btn-light"><i class="fa-regular fa-heart"></i></a>
                </div>
                </div>
                </div>
            </div> 
            <div class="explore-card mt-5 mb-5">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/ex1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Jordan Trail</h5>
                    <p class="card-text">hike history.touch time.</p>
                    <div>
                        <a href="#" class="btn btn-light">Book</a>
                    <a href="#" class="btn btn-light"><i class="fa-regular fa-heart"></i></a>
                    </div>
                </div>
                </div>
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/ex2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Downtown Amman</h5>
                    <p class="card-text">in the footsteps of myths and men</p>
                    <div>
                    <a href="#" class="btn btn-light">Book</a>
                    <a href="#" class="btn btn-light"><i class="fa-regular fa-heart"></i></a>
                </div>
                </div>
                </div>
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/ex3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Dead Sea</h5>
                    <p class="card-text">life at your own pace.</p>
                    <div>
                    <a href="#" class="btn btn-light">Book</a>
                    <a href="#" class="btn btn-light"><i class="fa-regular fa-heart"></i></a>
                </div>
                </div>
                </div>
            </div> 
            <div class="explore-card mt-5 mb-5">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/ex1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Jordan Trail</h5>
                    <p class="card-text">hike history.touch time.</p>
                    <div>
                        <a href="#" class="btn btn-light">Book</a>
                    <a href="#" class="btn btn-light"><i class="fa-regular fa-heart"></i></a>
                    </div>
                </div>
                </div>
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/ex2.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Downtown Amman</h5>
                    <p class="card-text">in the footsteps of myths and men</p>
                    <div>
                    <a href="#" class="btn btn-light">Book</a>
                    <a href="#" class="btn btn-light"><i class="fa-regular fa-heart"></i></a>
                </div>
                </div>
                </div>
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../images/ex3.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Dead Sea</h5>
                    <p class="card-text">life at your own pace.</p>
                    <div>
                    <a href="#" class="btn btn-light">Book</a>
                    <a href="#" class="btn btn-light"><i class="fa-regular fa-heart"></i></a>
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
@extends('layouts.app')

@section('content')

<header class="container-fluid container-menu">
    <div class="row">
        <h1 class="welcome-to">Welcome To</h1>
        <h1 class="f-h">Food<span class="f-h2">Hub</span></h1>

        <div class="row">
            <div class="text-center">
                <h3 class="tagline">Find your flavor, share your savour - Recipe Search and Sharing made easy with FoodHub!</h3>
                {{-- <form class="search-form" action="{{ route('search') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" name="query" placeholder="Search recipes by ingredient or cuisine...">
                        <div class="input-group-append"> --}}
                            <button class="btn btn-outline-success my-2 my-sm-0 btn-menu" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

</header>



<div id="carouselExampleIndicators" class="caro carousel slide my-5">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('assets/jabe.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/bob.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/red.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


{{--<div class="row p-0">
                <h2 class ="menu-word">Menu</h2>
</div>--}}
        
    <div class="row">
            
    @foreach($menus as $menu)
        <div class="col-6 col-sm-4 col-md-3 card-menu mx-auto p-0">
                <div class="card menu-item2">
                <img class="card-img-top" src="{{ asset('assets/milodino.jpg') }}" alt="{{ $menu->name }}">

                    <div class="card-header">
                        <h3 class = "menu-item3">{{ $menu->name }}</h3>
                    </div> 
                    <div class="card-body">
                        <p>{{ $menu->restaurant }}</p>
                        <p>{{ $menu->recipe }}</p>
                        <a href="{{ $menu->video_url }}" target="_blank">Watch video</a>
                    </div>
                </div>
        </div>
    @endforeach
    
    </div>

</div>

@endsection

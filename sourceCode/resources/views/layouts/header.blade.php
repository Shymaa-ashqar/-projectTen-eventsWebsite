<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Sona Template">
    <meta name="keywords" content="Sona, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VisitJO</title>
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" >
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Header Section Begin -->
    <header class="header-section " style="background-color:  #F3F5F8">
     
        <nav class="navbar navbar-expand-lg navbar-light " >
            <div class="container-fluid">
            <a class="navbar-brand" href="#">VisitJo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/explore">Explore Jordan </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="/bookinglist">Trips </a>
                  </li>     
                  <li class="nav-item active">
                    <a class="nav-link" href="/bookinglist">Food </a>
                  </li>        
              </ul>
              <form class="form-inline my-2 my-lg-0">
                  
               
                <div class="row">                  
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav row mr-3">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="row nav-item active">
                                <a  class="nav-link" id="navbarDropdown"
                                 {{-- class="nav-link dropdown-toggle"  --}}
                                 href="{{ route('userProfile') }}" >
                                    {{ Auth::user()->name }}
                                </a>
                                @if(Auth::user()->role=="admin")
                                <a  href="admin/admin"
                                     >
                                        {{ __('dashboard') }}
                                    </a>
                                    @endif
                                  
                                    <div >
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                       
                        @endguest
                    </ul>
                             
                </div>
              </form>
            </div>
            </div>
          </nav>
              
    </header>
    <!-- Header End -->
    <main>
        @yield('content')
        @extends('layouts.footer')
    </main>
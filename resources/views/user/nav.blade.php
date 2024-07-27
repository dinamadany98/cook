<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
   
  <link rel="stylesheet" href="{{URL::asset('/css/about.css')}}">
  <style>
    .active{
      color:darksalmon;
    }
  </style>
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light" style="background-color: rgb(50, 49, 49);">
        <div class="container-fluid" >
          <a class="navbar-brand " href="#">
            {{-- width="30" height="24" --}}
            <img src="{{URL::asset('/images/WhatsApp_Image_2024-05-05_at_3.01.04_PM-removebg-preview.png')}}" alt="notfound" width="90" height="90" class="d-inline-block align-text-top ms-5">
      </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="container ps-4 ">
          <div class="collapse navbar-collapse div1 " id="navbarSupportedContent" style="margin-left: 200px">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 ps-lg-4  ">
             
                <li class="nav-item ms-md-2 ps-lg-4" >
                  <a class="nav-link   asd " aria-current="page" href="/"  style="color:white" ><span class="{{ (request()->is('/')) ? 'active' : '' }}">Home</span></a>
                </li>
                <li class="nav-item ps-lg-3">
                  <a   href="/about" class="nav-link " style="color:white"><span class="{{ (request()->is('about')) ? 'active' : '' }}">About</span> </a>
                </li>
           
                
                <li class="nav-item ps-lg-3">
                  <a class="nav-link" href="/contact" style="color:white"><span class="{{ (request()->is('contact')) ? 'active' : '' }}">Contact</span></a>
                </li>
                <li class="nav-item ps-lg-4">
                  <a class="nav-link" href="/addingredients" style="color:white"><span class="{{ (request()->is('addingredients')) ? 'active' : '' }}">Add&nbsp;Ingredients</span></a>
                </li>
            
       @if (Auth::check())
       @can("isAdmin")
       <a class="nav-link" href="/dashboard" style="color:white"><span >Dashboard</span></a>
        
           
       @else
          

       <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
          {{substr(auth()->user()->name,0,10)}}
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <li> 
            


            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="route('logout')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();" style="text-decoration: none"><button type="button" class="dropdown-item" > Logout</button>

              </a>
          </form>

 </li>
          </ul>
      </div>
      @endcan

          @else
          
          <li class="nav-item">
            <a class="nav-link  " aria-current="page" href="/login" style="color:white">login</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link  " aria-current="page" href="/register" style="color:white">register</a>
          </li> 
       @endif
      </ul>
          </div>
        </div>
      </nav>

    
            
        @yield('mynav')


    
</body>
</html>
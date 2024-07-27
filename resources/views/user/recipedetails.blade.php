@extends('user.nav')
@section('mynav')
<!DOCTYPE html>
<html  >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('/css/about.css')}}">
  
<style>
@import url('https://fonts.googleapis.com/css2?family=Changa:wght@200..800&display=swap');

 
 
</style>
    <title>details</title>
</head>
<body>
  
  
    
<div class="container mt-4">

<div class="row">
    
    <div class="col-8">
 
        <div  style="width:auto ;background-color:#0e3554;border-radius: 10px;height:260px " class="p-2">
            <h1 style="font-family:lucida calligraphy,cursive;color:white" class="ms-2">
                 {{$data->name}}  
            
            
            
            </h1> 
        <br>
        
         
        <span style="font-weight: bold;"  >
            <span class="h3 " style="text-decoration: underline;color: gold" > Ingredients </span> 
             <br>
      <p class="mt-3" style="color: white">
        {{$data->ingredients}}  
      </p>    
      
        </span>
         
          </div> 

          <div class="mt-4 mb-4">
            <div class="card">
                <div class="card-header h3">
                    How To Prepare
                 </div>
                <div class="card-body">
                   
                   
                  <h5 class="card-title">{{$data['prepare']}}</h5>
               
                </div>
              </div>
          </div>
    @if ($data['video'] != null)
        
          <div class="mt-4 mb-4">
            <div class="card">
                <div class="card-header h3">
                     Link Of Video
                 </div>
                <div class="card-body">
                   
                   
                  <h5 class="card-title">
                  <a href="{{$data['video']}}">  {{$data['video']}} </a>  
                </h5>
               
                </div>
              </div>
          </div>

    @endif

    </div>
<div class="col-4">
    <img src="{{URL::asset('/images/recipes/'.$data->photo)}}" class="card-img-top " alt="..." width="300px" height="300px">
</div>




</div>


</div>
@php 
$sentence  = explode(' ', $data->name);
 @endphp
 
<div class="container">

    <div class="row featured__filter  ">
        <div style="text-align: center;margin-top:100px">
            <h1 style="color: rgb(12, 59, 100)" > You May Like      </h1>
        </div>
        @if (App\Models\Recipe::where('name','like',"%$sentence[0]%")->count() >1)
            @foreach(App\Models\Recipe::where('name','like',"%$sentence[0]%")->get() as $item)
        
             
        
            <div class="card ms-3 mt-3" style="width: 19rem;">
                <img src="{{URL::asset('/images/recipes/'.$item->photo)}}" class="card-img-top mt-2" alt="..." width="100px" height="200px">
                <div class="card-body">
                  <h5 class="card-title" style="height: 50px;overflow: hidden; " >{{$item->name}}</h5>
                   <p class="card-text" style="height: 150px;overflow: hidden;">{{substr($item->ingredients,0,100)}}.....</p>
                  <a href="/recipe/{{$item->id}}" class="btn " style="background-color: #0e3554;color:white">Show Details  </a>
                </div>
              </div>
           
                
            @endforeach
        @else
           
    @foreach(App\Models\Recipe::limit(6)->get() as $item)
    <div class="card ms-3 mt-3" style="width: 19rem;">
        <img src="{{URL::asset('/images/recipes/'.$item->photo)}}" class="card-img-top mt-2" alt="..." width="100px" height="200px">
        <div class="card-body">
          <h5 class="card-title" style="height: 50px;overflow: hidden;"   >{{$item->name}}</h5>
           <p class="card-text" style="height: 150px;overflow: hidden;">{{substr($item->ingredients,0,100)}}.....</p>
          <a href="/recipe/{{$item->id}}" class="btn " style="background-color: #0e3554;color:white">Show Details</a>
        </div>
      </div> 
        @endforeach
        @endif
 
    </div>
    
    </div>


    <br><br><br>

    <div class="container-fluid" style="position: relative;margin-top: 200px;">
    
        
      <footer >
            
          <div class="container-fluid text-light pt-4 " style="background-color: #0e3554;position: absolute;top: 0;left: 0;" >
        <div class="row mt-5">
          <div  class="col-md-3">
            <img src="{{URL::asset('/images/WhatsApp Image 2024-05-05 at 3.01.04 PM.jpeg')}}" class="img-fluid rounded-top" alt="" width="40px" height="40px" style="text-align:left;"> Ratatouille
            <br><p>
                <br>
                We always try to provide useful and healthy 
                nutritional recipes to help you build a healthy body for all ages
            </p>
    
          </div>
          <div class="col-md-2 offset-md-1">
            <span class="d-block h4"> our link</span> 
            <span class="d-block">Home </span>
            <span class="d-block"> About Us </span>
            <span class="d-block"> Contact Us </span>
          
    
          </div>
          <div  class="col-md-3">
            <span class="d-block h4"> socail media</span> 
            <i class="bi bi-facebook h5"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="bi bi-twitter h5"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="bi bi-instagram h5"></i>
    
          </div>
          <div  class="col-md-3">
            <span class="d-block h4"> conact info</span> 
               Email:johan@example.com <br> 
               Phone:123-456-7890
            
    
          </div>
        </div><br><br><br>
      </div>
      <br><br><br>
    </footer>
    
    </div>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></head> 
      





</body>
</html>

@endsection
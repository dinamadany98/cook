@extends('user.nav')
@section('mynav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
   
  <link rel="stylesheet" href="{{URL::asset('/css/about.css')}}">

      
</head>
<body>
 
<br><br>
<center>
    <div class="container col-6">
        <form class="d-flex" method="POST" action="/searchdata">
            @csrf
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" required value="{{Session::get('data')}}">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
    </div>
  
</center>



<br><br><br><br>

@if(Session::has('message'))
@include('user.contentsearch',["data"=>Session::get('message')])
@else
<div style="text-align: center;margin-top:100px">
    <h1 style="color: rgb(12, 59, 100)" > Start Search </h1>
</div>
@endif
 
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>   
</body>
</html>
@endsection    
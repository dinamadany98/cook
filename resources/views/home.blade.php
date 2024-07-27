@extends('user.nav')
@section('mynav')
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

    <title>Contact us</title>
</head>
<body class="overflow-hidden" style="
  
   
   background-size:cover;
  
  background-repeat: no-repeat;
  
     background-image: url({{URL::asset('/images/IMG-20240517-WA0010.jpg')}});
     
" >

@if(Session::has('success'))
<div class="alert alert-success" role="alert" style="background-color: #0e3554;color:azure;margin-bottom: -20px;margin-left:400px; width:40%;font-weight:bolder;text-align:center;border:#0e3554;margin-top:3px" >
  {{Session::get('success')}}
</div>
@endif
<center>
    <h1 style="margin-left:60px ;color:gold;margin-top:160px" >Ratatouille</h1>
 <h2 style="margin-left:65px ;color:white;margin-top:50px">All Your Food Desires <br> In One Place</h2>
</center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>   
</body>
</html>
@endsection   
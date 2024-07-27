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
  @if(Session::has('success'))
  <div class="alert alert-success" role="alert" style="background-color: #0e3554;color:azure;margin-bottom: -20px;margin-left:300px; width:56%; margin-top:50px;font-weight:bolder;text-align:center;" >
    {{Session::get('success')}}
  </div>
  @endif
<br><br>

 <section>
<div class="container-fluid bg-light "  width="100%">

  <div class="row">
    <div class="col-5  pt-4" >
     <span style="color: rgb(254, 223, 51);" class="mt-4 ms-4 h3"> - About Us</span><br> <br>
      <p class="mt-4 ms-4" style="font-weight: bold">
        Ever found yourself staring into your kitchen wondering what to make with the random assortment
         of ingredients in your pantry? Enter Ratatouille, 
         your ultimate solution to culinary conundrums! With Ratatouille, 
         you hold the power to transform ordinary ingredients into extraordinary meals. 
         Simply input the items you have on hand, and let our innovative platform work its magic.
         Instantly, you'll unlock a treasure trove of delectable recipes perfectly tailored to your available ingredients. 
        Say goodbye to food waste and hello to culinary creativity with Ratatouille.
        Let's turn your kitchen into a haven of delicious possibilities!
        We always try to provide useful and healthy 
        nutritional recipes to help you build a healthy body for all ages
        <br>
        <br>
      </p>
    
    </div>
      <div class="col-6 mt-3 ms-4 ">
      <img src="{{URL::asset('/images/IMG-20240517-WA0015.jpg')}}" class="img-fluid rounded-top ms-5" alt="notfound">
    </div>
  </div>

</div>
</section>   



<br><br><br><br>
<div class="col-6 text-center" style="margin-top: 100px;margin-left:250px">
  <span style="color: gold;" class="mt-4 ms-4 h3 " > Our Mission</span><br> <br>
 </div>
 <br>
<div class="container border border-2" style="width:900px; border-radius: 15px 50px 15px 15px ;transform: rotate(0deg); ">
  <br><br><span style="margin-left: 250px"> Ratatouille become the best app in the world </span>
  <br><br><br>
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

<div class="container " style="width:fit-content; box-sizing:content-box;"    >


<div class="container border border-2 shadow ms-0 ms-lg-5" style="margin-top: -150px;position: absolute;top: 0;left: 0 ;background-color:white;"> 

<div class="row ">

             
  <div class=" col-md-8 col-lg-6   ">
   <p style="color: gold;" class="mt-4  h3 d-inline-block ms-4 "> Subscrip To Our News! </p>
   <p  class="mt-4  h5  ms-4"> Subscrip To get new  </p><br> <br>

  </div> 
  <div class="col-9    col-md-6 mt-4"  >

      <form  method="POST" action="/subscripe"  class="search-wrapper cf">
        @csrf
        <input type="text" placeholder="Enter your email..." required style="box-shadow: none" name="email">
        <button type="submit" class="fw-bold">Subscripe</button>
      </form>        
   
   
  </div>

</div>
</div>
</div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script>   
</body>
</html>
@endsection    
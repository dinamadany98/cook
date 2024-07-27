<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
 
<body>
    <div class="container">

<div class="row featured__filter  ">
    @forelse ($data as $item)
    <div class="card ms-3 mt-3" style="width: 19rem;">
        <img src="{{URL::asset('/images/recipes/'.$item->photo)}}" class="card-img-top mt-2" alt="..." width="100px" height="200px">
        <div class="card-body">
          <h5 class="card-title"  style="height: 50px;overflow: hidden;" >{{$item->name}}</h5>
           <p class="card-text" style="height: 150px;overflow: hidden;">{{substr($item->ingredients,0,100)}}.....</p>
          <a href="/recipe/{{$item->id}}" class="btn " style="background-color: #0e3554;color:white">Show Details</a>
        </div>
      </div>
    @empty
    <div style="text-align: center;margin-top:100px">
        <h1 style="color: rgb(12, 59, 100)" >The Meal Not Found <i class="bi bi-emoji-frown"></i>   </h1>
    </div>
    @endforelse
</div>

</div>
</body>
</html>
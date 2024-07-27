@extends('admin.nav')
@section('mynav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href=" {{ URL::asset('css/form.css') }} " >

    <title>update user recipe</title>
</head>
<body style="        background-size:cover;
 
background-repeat: no-repeat;
   background-image: url({{URL::asset('/images/IMG-20240517-WA0008.jpg')}});
  ">
   
<div id="form-main">
    <div id="form-div">
        <form action="/userrecipe/{{$data->id}}" method="POST" enctype="multipart/form-data">
            @method("PUT")
            @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Meal Name</label>
      <input type="text" class="form-control" id="name"  name="name"  required value="{{$data->name}}" required> 
     
    </div>
    <div class="mb-3">
      <label for="ingredients" class="form-label">Ingredients</label>
       <textarea class="form-control"    id="ingredients"  name="ingredients"   style="height: 50px" required   >{{$data->ingredients}}</textarea>
      
   
    </div>
      <div class="mb-3">
        <label for="prepare" class="form-label">How to prepare</label>
         <textarea class="form-control"    id="prepare"  name="prepare"  style="height: 100px" required  >{{$data->prepare}}</textarea>

   
      </div> 
      <div class="mb-3">
        <label for="prepare" class="form-label">Photo</label><br>
        <input type="file"   name="photo" id="" placeholder="chose photo" aria-describedby="fileHelpId" >

       
   
      </div> 

      <div class="mb-3">
        <label for="prepare" class="form-label">Video Link</label><br>
        <input type="text" class="form-control" id="video"  name="video" value="{{$data->video}}"  > 
 
       
   
      </div> 
    <button type="submit" class="btn btn-primary  mt-2 mb-2" style="margin-left: 250px"> Update </button>
     <img src="{{URL::asset('/images/recipes/'.$data->photo)}}" width="100px" height="100px">

</form>
<br>
</div>
</div>
</body>
</html>

@endsection
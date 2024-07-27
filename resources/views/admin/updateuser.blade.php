@extends('admin.nav')
@section('mynav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>update user </title>
</head>
<body style="        background-size:cover;
 
background-repeat: no-repeat;
   background-image: url({{URL::asset('/images/IMG-20240517-WA0008.jpg')}});
  "> 
  
<html>
    <header>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href=" {{ URL::asset('css/form.css') }} " >
     
    </header>
    <body  >
  
 <br>
<div id="form-main">
    <div id="form-div">
        <form action="/user/{{$data->id}}" method="POST" >
            @method("PUT")
            @csrf
    <div class="mb-3">
      <label for="name" class="form-label">User Name</label>
      <input type="text" class="form-control" id="name"  name="name"  readonly value="{{$data->name}}" > 
     
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">User Email</label>
      <input type="email" class="form-control" id="email"  name="email"  readonly value="{{$data->email}}" > 
       
   
    </div>
      <div class="mb-3">
        <label for="nationality" class="form-label">Nationality</label>
        <input type="text" class="form-control" id="nationality"  name="nationality"  readonly value="{{$data->nationality}}" > 
 
   
      </div> 
      <div class="mb-3">
        <label for="age" class="form-label">Age</label><br>
        <input type="text" class="form-control" id="age"  name="age"  readonly value="{{$data->age}}" > 
      
   
      </div> 
      <div class="mb-3">
        <label for="role" class="form-label">Role</label><br>
        <input type="text" class="form-control" id="role"  name="role"  value="{{$data->role}}" required > 
 
       
   
      </div> 
    <button type="submit" class="btn btn-primary  mt-2 mb-4" style="margin-left: 250px"> Save </button>
  </form>
</div>
</div>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     

</body>
</html>
 
</body>
</html>
@endsection
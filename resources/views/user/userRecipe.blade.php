 
<html>
    <header>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href=" {{ URL::asset('css/form.css') }} " >
     
    </header>
    <body class="overflow-hidden" style="
  
   
    background-size:cover;
   
   background-repeat: no-repeat;
   
      background-image: url({{URL::asset('/images/IMG-20240517-WA0008.jpg')}});
      
 " >
  
 
<div id="form-main">
    <div id="form-div">
        <form action="/userrecipe" method="POST" enctype="multipart/form-data">
            @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Meal Name</label>
      <input type="text" class="form-control" id="name"  name="name"  required> 
     
    </div>
    <div class="mb-3">
      <label for="ingredients" class="form-label">Ingredients</label>
       <textarea class="form-control"    id="ingredients"  name="ingredients"   style="height: 50px" required></textarea>
      
   
    </div>
      <div class="mb-3">
        <label for="prepare" class="form-label">How to prepare</label>
         <textarea class="form-control"    id="prepare"  name="prepare"  style="height: 100px" required></textarea>

   
      </div> 
      <div class="mb-3">
        <label for="prepare" class="form-label">Photo</label><br>
        <input type="file"   name="photo" id="" placeholder="chose photo" aria-describedby="fileHelpId"  required>

       
   
      </div> 
      <div class="mb-3">
        <label for="prepare" class="form-label">Video Link</label><br>
        <input type="text" class="form-control" id="video"  name="video"  > 
 
       
   
      </div> 
    <button type="submit" class="btn btn-primary  mt-2" style="margin-left: 250px">Add Recipe</button>
  </form>
</div>
</div>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     

</body>
</html>
 
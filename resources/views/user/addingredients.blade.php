{{-- @extends('user.nav')
@section('mynav') --}}
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
  <script src="{{URL::asset('jquery-3.3.1.min.js')}}"></script> 
   <style>
.active{
    background-color: green;
    color: white
}
   </style>
    <title>search ingredients</title>
</head>
<body>
  <center>
    <div class="row col-5 mt-4 mb-2">
      <form class="d-flex" method="POST" action="/searchdata">
        @csrf
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search" required >
        <input class="btn btn-outline-success" type="submit" value="Search"> 
      </form>
    </div>
  </center>

   <div class="container mt-4 " style="width: 100%">
<div class="row">
    
  
    <div style="width:25%;margin-right:7px; 
    height: 500px; 
    display: inline-block;
    overflow-y: scroll ; ">
    
      <form   method="POST" action="/showingredients">
        @csrf
        <div  >
    <div class="fixed-bottom">
     
             {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}

    </div>
        <div class="card mt-4 shadow bg-body rounded">
            <div class="card-header" style="background-color:#0e3554;color:white ">
                Pantry Essentials
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>
                    <button type="button"  id="garlic" class="btn btn-light"  >garlic</button>
                    <button type="button"  id="potato" class="btn btn-light ms-3">potato</button>
                    <button type="button"  id="tomato" class="btn btn-light mt-2">tomato</button>
                    <button type="button"  id="onion" class="btn btn-light mt-2">onion</button>
                    <button type="button"  id="carrot" class="btn btn-light mt-2">carrot</button>
                    <button type="button"  id="paprika" class="btn btn-light mt-2 ms-2">paprika</button>
                    <button type="button"  id="vanilla" class="btn btn-light mt-2">vanilla</button>
                    <button type="button"  id="cumin" class="btn btn-light mt-2 ms-2">cumin</button>
                    <button type="button"  id="mustard" class="btn btn-light mt-2">mustard</button>
                    <button type="button"  id="hony" class="btn btn-light mt-2">honey</button>

                </p>
               </blockquote>
            </div>
          </div>
          <div class="card mt-4 shadow bg-body rounded">
            <div class="card-header" style="background-color:#0e3554;color:white ">
               Vegetables
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>
                    <button type="button" id="bell pepper" class="btn btn-light">bell pepper</button>
                    <button type="button" id="cucumber" class="btn btn-light ">cucumber</button>
                    <button type="button" id="chile pepper" class="btn btn-light mt-2">chile pepper</button>
                    <button type="button" id="yam" class="btn btn-light mt-2">yam</button>
                    <button type="button" id="baby carrot" class="btn btn-light mt-2 ms-2">baby carrot</button>
                    <button type="button" id="broccoli" class="btn btn-light mt-2">broccoli</button>
                    <button type="button" id="microgreens" class="btn btn-light mt-2 ms-2">microgreens</button>
                    <button type="button" id="cress" class="btn btn-light mt-2">cress</button>
                    <button type="button" id="cabbage" class="btn btn-light mt-2">cabbage</button>
                    <button type="button" id="mustard" class="btn btn-light mt-2">mustard</button>


                </p>
               </blockquote>
            </div>
          </div>
          <div class="card mt-4 shadow bg-body rounded">
            <div class="card-header" style="background-color:#0e3554;color:white ">
                Cheeses , milk , butter
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>
                    <button type="button" class="btn btn-light">cream cheese</button>
                    <button type="button" class="btn btn-light ">cheddar</button>
                    <button type="button" class="btn btn-light mt-2">sharp cheddar</button>
                    <button type="button" class="btn btn-light mt-2">feta</button>
                    <button type="button" class="btn btn-light mt-2 ">goat cheese</button>
                    <button type="button" class="btn btn-light mt-2">egg</button>
                    <button type="button" class="btn btn-light mt-2">parmesan</button>
                    <button type="button" class="btn btn-light mt-2 ms-2">milk</button>
                    <button type="button" class="btn btn-light mt-2">goose fat</button>
                    <button type="button" class="btn btn-light mt-2">butter</button>
                </p>
               </blockquote>
            </div>
          </div>
          <div class="card mt-4 shadow bg-body rounded">
            <div class="card-header" style="background-color:#0e3554;color:white ">
                Pasta
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>
                    <button type="button" class="btn btn-light">pasta</button>
                    <button type="button" class="btn btn-light"> macaroni</button>
                    <button type="button" class="btn btn-light mt-2">pasta shell</button>
                    <button type="button" class="btn btn-light mt-2">lasagna</button>
                    <button type="button" class="btn btn-light mt-2">fettuccine</button>
                    <button type="button" class="btn btn-light mt-2"> noodle</button>
                    <button type="button" class="btn btn-light mt-2">vermicelli</button>
                    <button type="button" class="btn btn-light mt-2">gnocchi</button>
                    <button type="button" class="btn btn-light mt-2">rigatoni</button>

                    <button type="button" class="btn btn-light mt-2 ms-3">orzo</button>


                </p>
               </blockquote>
            </div>
          </div>
          <div class="card mt-4 mb-4 shadow bg-body rounded">
            <div class="card-header" style="background-color:#0e3554;color:white ">
                oil
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>
                    <button type="button" class="btn btn-light">olive oil</button>
                    <button type="button" class="btn btn-light mt-2">palm oil</button>
                    <button type="button" class="btn btn-light mt-2">vegetable oil</button>
                    <button type="button" class="btn btn-light mt-2">oil</button>
                    <button type="button" class="btn btn-light mt-2 ">salad oil</button>
                    <button type="button" class="btn btn-light mt-2">castor oil</button>
                    <button type="button" class="btn btn-light mt-2">soybean oil</button>
                    <button type="button" class="btn btn-light ">lard</button>
                    <button type="button" class="btn btn-light mt-2 ">canola oil</button>
                    <button type="button" class="btn btn-light mt-2">tallow</button>
        
                </p>
               </blockquote>
            </div>
          </div>
          <div class="card mt-4 mb-4 shadow bg-body rounded">
            <div class="card-header" style="background-color:#0e3554;color:white ">
              Meats , Poultry 
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>
                    <button type="button" class="btn btn-light">ground beef</button>
                    <button type="button" class="btn btn-light mt-2">bacon</button>
                    <button type="button" class="btn btn-light mt-2">beef steak</button>
                    <button type="button" class="btn btn-light mt-2">salami</button>
                    <button type="button" class="btn btn-light mt-2 ">hot dogs</button>
                    <button type="button" class="btn btn-light mt-2">duck</button>
                    <button type="button" class="btn btn-light mt-2">chicken breast</button>
                    <button type="button" class="btn btn-light ">quail</button>
                    <button type="button" class="btn btn-light mt-2 ">goose</button>
                    <button type="button" class="btn btn-light mt-2">chicken</button>
        
                </p>
               </blockquote>
            </div>
          </div>
    </div>
</form>
    </div>

    {{-- $('.add').append(`@include("user.showingredients",["data"=>`+ $.parseJSON(data) +`])`); --}}

    <div style="width:70%;"  >
      <div class="container">

        <div class="row featured__filter add ">




        </div>
      </div>

     
</div>
</div>
   </div>
   <script>
    $(document).ready(function() {   
    $("button").on("click", function(){
        $(this).toggleClass('btn-light')
        $(this).toggleClass('btn-success');
            // var id = $(this).attr("id");

            var allingredientList =$('.btn-success').map(function () {
            return this.innerHTML;
        }).get();
            if(allingredientList == '')
            allingredientList="";
            
  
          $.ajax({

                url: '/showingredients',
                type: 'GET',
                dataType: 'json',
                data:{'allingredientList': allingredientList}, 
                success: function(response) {
                    var data= response.allingredientList;
               
                    // console.log(data);
                    $('.add').empty();
                    var arr=[];
                    if (data.length == 0) {
                      $('.add').append(`<h1> No Meal Found</h1>`);
                    }
                    data.forEach(element => { 
                      element.forEach(elements => {
                        if (jQuery.inArray(elements.id, arr) == -1)
                      {
                      // console.log(elements);
                      $('.add').append(
                      `<div class="card ms-3 mt-3" style="width: 19rem;"><img src="/images/recipes/${elements.photo}" class="card-img-top mt-2" alt="..." width="100px" height="200px"><div class="card-body"><h5 class="card-title" style="height: 50px;overflow: hidden;"  >`+elements.name +`</h5><p class="card-text" style="height: 150px;overflow: hidden;">`+elements.ingredients.slice(0, 100)+`.....</p><a href="/recipe/`+elements.id+`" class="btn " style="background-color: #0e3554;color:white">Show Details</a></div></div>`
                    );
                    arr.push(elements.id);
                      }
                         
                   
                         
                      });
                   });
                   
                    
                   

                   

                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>

</body>
</html>
{{-- @endsection --}}
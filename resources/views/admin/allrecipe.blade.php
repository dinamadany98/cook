@extends('admin.nav')
@section('mynav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('/css/subscription.css')}}">
    <style>
table::-webkit-scrollbar {
  width: 5px;
  margin-left: 4px
}
table::-webkit-scrollbar-thumb {
  background: black; 
  border-radius: 10px;
}
    </style>

<body style="background-size:cover;
    background-repeat: no-repeat;
       background-image: url({{URL::asset('/images/IMG-20240517-WA0008.jpg')}});
      ">
    <title> User Recipe</title>
</head>
<body>
   <center >

 
    <div class="product-status mg-b-30    " style="margin-left: 100px;margin-top: 50px;">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >

                    <div class="product-status-wrap" >
                        
                        <table style="
                            height: 700px; 
                            display: inline-block;
                            overflow-y: scroll ;
    
                          ">
                                
                            
                            @if (!$data->isEmpty())

                            <tr>
                                <th  class="col-2">Meal </th>
                                <th  class="col-2">Ingredients</th>
                                <th  class="col-3">How to prepare</th>
                                <th  class="col-1">Video Link </th>
                                <th  class="col-2">photo  </th>
                                <th  class="col-2">Modify  </th>
                                

                            </tr>
                            @endif

                            @forelse($data as $item)
                            <tr>
                             

                                <td >{{$item->name}}</td>
                                <td>{{$item->ingredients}}</td>
                                <td >{{$item->prepare}}</td>
                                <td>{{$item->video}}</td>
                                <td> <img src="{{URL::asset('/images/recipes/'.$item->photo)}}"></td>
                                <td>
                                    <form method="POST" action="/recipe/{{$item->id}}">
                                        @method('DELETE')
                                        @csrf
                                        <a href="/recipe/{{$item->id}}" title="delete recipe"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();"><i class="bi bi-trash3 h4 text-danger"></i></a>&nbsp;
                                        <a href="{{route("recipe.edit",$item->id)}}" title=" edite recipe"><i class="bi bi-pencil-square h4 text-success"></i></a>
                                     </form>
                                </td>                                
                                 
                                     
                                   
                            </tr>
                        
                                
                            @empty
                                <h1 style="color: aliceblue"> No  Recipe </h1>
                            @endforelse
                        </table>
                    </div>    
                      
                    
                </div>
            </div>
        </div>
    </div>
</center>
</body>
</html>
@endsection

@extends('admin.nav')
@section('mynav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('/css/subscription.css')}}">

    <title>all Users</title>
</head>
<body style="        background-size:cover;
 
background-repeat: no-repeat;
   background-image: url({{URL::asset('/images/IMG-20240517-WA0008.jpg')}});
  ">
   <center>

 
    <div class="product-status mg-b-30    " style="margin-left: 100px;margin-top: 50px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">

                    <div class="product-status-wrap">
                        
                        <table>
                                
                            
                            @if (!$data->isEmpty())

                            <tr>
                                <th  class="col-2">Name</th>
                                <th  class="col-2">Email</th>
                                <th  class="col-2">Nationality</th>
                                <th  class="col-2">Age </th>
                                <th  class="col-2">Role  </th>
                                <th  class="col-2">Modify  </th>
                                

                            </tr>
                            @endif

                            @forelse($data as $item)
                            <tr>
                             

                                <td >{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td >{{$item->nationality}}</td>
                                <td>{{$item->age}}</td>
                                <td>{{$item->role}}</td>
                                <td><a href="{{route("user.edit",$item->id)}}" title="modify role"><i class="bi bi-pencil-square h4 text-success"></i></a></td>
                                
                                 
                                     
                                   
                            </tr>
                        
                                
                            @empty
                                <h1 style="color: aliceblue"> No Users </h1>
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
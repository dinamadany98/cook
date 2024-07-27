@extends('admin.nav')
@section('mynav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{URL::asset('/css/subscription.css')}}">

    <title> User Recipe</title>
</head>
<body style="        background-size:cover;
 
background-repeat: no-repeat;
   background-image: url({{URL::asset('/images/IMG-20240517-WA0008.jpg')}});
  ">
   <center>

 
    <div class="product-status mg-b-30    " style="margin-left: 100px;margin-top: 50px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="product-status-wrap">
                        
                        <table>
                                
                            
                            @if (!$data->isEmpty())

                            <tr>
                                <th  class="col-2">Name </th>
                                <th  class="col-2">Email</th>
                                <th  class="col-3">Phone Number </th>
                                <th  class="col-4">Message</th>
                                
                                

                            </tr>
                            @endif

                            @forelse($data as $item)
                            <tr>
                             

                                <td >{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td >{{$item->phonenumber}}</td>
                                <td>{{$item->message}}</td>
                                                             
                                 
                                     
                                   
                            </tr>
                        
                                
                            @empty
                                <h1 style="color: aliceblue"> No  FeedBack </h1>
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

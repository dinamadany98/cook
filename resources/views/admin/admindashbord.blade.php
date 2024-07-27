@can("isAdmin")
@extends('admin.nav')
@section('mynav')
<html  >
<!DOCTYPE html>
<html  ">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

<style>
 
    .asd{
        color:aliceblue;
        background-size:contain;
  /* background-position: center center; */
  background-repeat: no-repeat;
     background-image: url({{URL::asset('/images/IMG-20240517-WA0015.jpg')}});
    
 
    }
</style>
    <title>dashboard</title>
</head>
<body>
    
    <div class="dash-body" style="margin-top: 15px" >
        <table border="0" width="100%" style=" border-spacing: 0;margin:0;padding:0;" >
                    
                  
            <tr>
               
                    
                 
                <table class="filter-container doctor-header  " style="border: none;width:95%" border="0" >
                    <tr  class="col-12"  style="background-color: rgba(0, 0, 0, 0.891);color:white" >
                        <td  class="ps-8   " style="padding-left: 15px ;padding-top: 15px" >
                            <h3>Welcome!</h3>
                            <h1>{{auth()->user()->name}}.</h1>
                              </p>
                             <br>
                            <br>
                        </td>
                        <td  class="ps-8   col-12" style="padding-left: 15px ;padding-top: 15px" >
                                    <img src="{{URL::asset('/images/IMG-20240517-WA0015.jpg')}}" alt="" width="600px" height="450px" >
                         
                            </td>
                    </tr>
                    </table>
                 <br><br>
            </td>
            </tr>
            <tr>
                <td colspan="4">
                    <table border="0" width="100%"">
                        <tr>
                            <td width="50%">

                                




                                
                                    <table class="filter-container" style="border: none;" border="0">
                                     
                                        <tr>
                                            <td style="width: 25%;">
                                                <div  class="dashboard-items mb-3"  style="padding:20px;margin:auto;width:95%;display: flex;border:2px solid #0e3554;box-shadow: 0 0px 0px 2px rgba(246, 230, 230, 0.3)">
                                                    <div>
                                                            <div class="h1-dashboard">
                                                                Users
                                                            </div><br>
                                                            <div class="h3-dashboard">
                                                                 @if(App\Models\User::where('role','user')->get() !=null)
                                                                 {{App\Models\User::where('role','user')->count()}}

                                                                 
                                                                @else
                                                                  0                                                                
                                                                @endif
                                                             </div>
                                                    </div>
                                                            <div    ><i class="bi bi-person-lines-fill h2 ms-2"></i></div>
                                                </div>
                                            </td>
                                            
                                            <td style="width: 25%;">
                                                <div  class="dashboard-items mb-3"  style="padding:20px;margin:auto;width:95%;display: flex;border:2px solid #0e3554;box-shadow: 0 0px 0px 2px rgba(246, 230, 230, 0.3)">
                                                    <div>
                                                            <div class="h1-dashboard">
                                                         Subscriptions
                                                            </div><br>
                                                            <div class="h3-dashboard">
                                                                @if(!(App\Models\Subscripe::get())->isEmpty())
                                                                    {{App\Models\Subscripe::get()->count()}}
                                                                     
                                                                
                                                                  @else
                                                                  0                                                                
                                                                @endif
                                                                
                                                                
                                                               {{-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; --}}
                                                            </div>
                                                    </div>
                                                            <div > <i class="bi bi-substack h2 ms-2"></i></div>
                                                </div>
                                            </td>
                                            </tr>
                                            <tr>
                                                <br>
                                            <td style="width: 25%;">
                                                <div  class="dashboard-items"  style="padding:20px;margin:auto;width:95%;display: flex;border:2px solid #0e3554;box-shadow: 0 0px 0px 2px rgba(246, 230, 230, 0.3) ">
                                                    <div>
                                                            <div class="h1-dashboard" >
                                                                Users Recipes
                                                            </div><br>
                                                            <div class="h3-dashboard" >
                                                                @if(!(App\Models\Userrecipe::get())->isEmpty())
                                                                {{App\Models\Userrecipe::get()->count()}}
                                                              
                                                               @else
                                                                 0
                                                             
                                                             @endif
                                                             
                                                              
                                                             </div>
                                                    </div>
                                                            <div ><i class="bi bi-view-list h2 ms-2"></i></div>
                                                </div>
                                             </td>

                                            <td style="width: 25%;">
                                                <div  class="dashboard-items"  style="padding:20px;margin:auto;width:95%;display: flex;padding-top:21px;padding-bottom:21px;border:2px solid #0e3554;box-shadow: 0 0px 0px 2px rgba(246, 230, 230, 0.3)">
                                                    <div>
                                                            <div class="h1-dashboard">
                                                                FeedBack
                                                            </div><br>
                                                            <div class="h3-dashboard"  >
                                                                @if(!(App\Models\Feedback::get())->isEmpty())
                                                                {{App\Models\Feedback::get()->count()}}
                                                              
                                                               @else
                                                             0
                                                             
                                                             @endif                                                            </div>
                                                    </div>
                                                            <div ><i class="bi bi-chat-square-text h2 ms-2"></i></div>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td style="width: 25%;">
                                                <div  class="dashboard-items mt-3"  style="padding:20px;margin:auto;width:95%;display: flex;border:2px solid #0e3554;box-shadow: 0 0px 0px 2px rgba(246, 230, 230, 0.3) ">
                                                    <div>
                                                            <div class="h1-dashboard" >
                                                                Recipe
                                                            </div><br>
                                                            <div class="h3-dashboard" >
                                                              
                                                                @if(!(App\Models\Recipe::get())->isEmpty())
                                                                {{App\Models\Recipe::get()->count()}}
                                                              
                                                               @else
                                                             0
                                                             
                                                             @endif    
                                                             
                                                             
                                                              
                                                             </div>
                                                    </div>
                                                            <div ><i class="bi bi-list-ul h2 ms-2"></i></div>
                                                </div>
                                             </td>

                                            
                                            
                                        </tr>

                                    </table>
 







                            </td>
                            




                            </td>
                        </tr>
                    </table>
                </td>
            <tr>
        </table>
    </div>




        <!-- Button trigger modal -->
 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></head> 

</body>
</html>
@endsection
@endcan
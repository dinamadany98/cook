<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="{{URL::asset('/css/maintwo.css')}}">
    {{-- <link rel="stylesheet" href="{{URL::asset('/css/main.css')}}"> --}}
    <style>
        p{
            color: white
        }
    </style>
   
</head>
<body>
    <div class="container"  >
        <div class="menu"style="background-color:#0e3554;color:white ">
        <table class="menu-container" border="0" >
                <tr>
                    <td style="padding:10px" colspan="3">
                        <table border="0" class="profile-container">
                            <tr>
                                <td width="30%" style="padding-left:10px" >
                                    
                                    <img src="{{URL::asset('/images/77.jpg')}}" alt="" width="100%" style="border-radius:50%">
                                </td>
                                <td style="padding:0px;margin-right: 0%; ">
                                    <p class="profile-title"  style="color:white" > {{substr(auth()->user()->name,0,20)}} </p>
                                    <p class="profile-subtitle">{{substr(auth()->user()->email,0,20)}}</p>
                                </td>
                            </tr> 
                            <tr>
                                <td colspan="2"class="mb-2">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();"><button type="button" class=" btn-outline-primary btn-primary-soft btn-lg col-10" id="openModal2" ><i class="bi bi-box-arrow-right"></i> &nbsp; Logout</button>

                                        </a>
                                    </form> 
                                </td>
                                
                            </tr>
                    </table>
                    </td>
                </tr>
                <tr class="menu-row mt-4" >
                    <td class="menu-btn menu-icon-dashbord mt-4  {{ (request()->is('/')) ? 'menu-active menu-icon-appoinment-active' : '' }}" >
                        <a href="/" class="non-style-link-menu {{ (request()->is('/')) ? 'non-style-link-menu-active' : '' }} "><div><p class="menu-text">  <i class="bi bi-house h4"></i>  Home  </p></div></a>
                    </td>
                </tr>
                <tr class="menu-row  " >
                    <td class="menu-btn menu-icon-dashbord mt-4  {{ (request()->is('dashboard')) ? 'menu-active menu-icon-appoinment-active' : '' }}" >
                        <a href="/dashboard" class="non-style-link-menu {{ (request()->is('dashboard')) ? 'non-style-link-menu-active' : '' }} "><div><p class="menu-text">  <i class="bi bi-speedometer2 h4"></i> Dashboard  </p></div></a>
                    </td>
                </tr>
              
                 
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-session {{ (request()->is('user')) ? 'menu-active menu-icon-appoinment-active' : '' }}">
                        <a href="/user" class="non-style-link-menu {{ (request()->is('user')) ? 'non-style-link-menu-active' : '' }}"><div><p class="menu-text"><i class="bi bi-person-lines-fill h4"></i>  Users </p></div></a>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-patient {{ (request()->is('userrecipe')) ? 'menu-active menu-icon-appoinment-active' : '' }}">
                        <a href="/userrecipe" class="non-style-link-menu {{ (request()->is('userrecipe')) ? 'non-style-link-menu-active' : '' }}"><div><p class="menu-text"><i class="bi bi-view-list h4"></i>  User Recipe </p></div></a>
                    </td>
                </tr>

                <tr class="menu-row">
                    <td class="menu-btn menu-icon-appoinment   {{ (request()->is('subscripe')) ? 'menu-active menu-icon-appoinment-active' : '' }}">
                        <a href="/subscripe" class="non-style-link-menu {{ (request()->is('subscripe')) ? 'non-style-link-menu-active' : '' }}"><div><p class="menu-text"><i class="bi bi-substack h4"></i> Subscriptions </p></div></a>
                    </td>
                </tr>

                <tr class="menu-row">
                    <td class="menu-btn menu-icon-appoinment   {{ (request()->is('recipe/create')) ? 'menu-active menu-icon-appoinment-active' : '' }}">
                        <a href="/recipe/create " class="non-style-link-menu {{ (request()->is('recipe/create ')) ? 'non-style-link-menu-active' : '' }}"><div><p class="menu-text"><i class="bi bi-file-earmark-plus h4"></i> Add Recipe </p> </div></a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn menu-icon-appoinment   {{ (request()->is('recipe')) ? 'menu-active menu-icon-appoinment-active' : '' }}">
                        <a href="/recipe" class="non-style-link-menu {{ (request()->is('recipe')) ? 'non-style-link-menu-active' : '' }}"><div><p class="menu-text"><i class="bi bi-list-ul h4"></i> All Recipe </p></div></a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn menu-icon-appoinment   {{ (request()->is('feedback')) ? 'menu-active menu-icon-appoinment-active' : '' }}">
                        <a href="/feedback" class="non-style-link-menu {{ (request()->is('feedback')) ? 'non-style-link-menu-active' : '' }}"><div><p class="menu-text"><i class="bi bi-chat-square-text h4"></i> FeedBack </p></div> </a>
                    </td>
                </tr>
               
 
                {{-- <tr class="menu-row" >
                    <td class="menu-btn menu-icon-settings">
                        <a href="settings.php" class="non-style-link-menu"><div><p class="menu-text">Settings</p></a></div>
                    </td>
                </tr> --}}
                 
            </table>
            <br>
        </div>
        <div class="dash-body"   >
            
            @yield('mynav')


        </div>
</body>
</html>
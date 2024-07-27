<!DOCTYPE html>
<html     >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>


    </style>
    <link rel="stylesheet" href="{{URL::asset('/css/register.css')}}">
    {{-- <link rel="stylesheet" href=" {{ URL::asset('css/form.css') }} " > --}}

    <title>  login  </title>
</head>
<body class="overflow-hidden" style="
  
   
   background-size:cover;
  
  background-repeat: no-repeat;
  
     background-image: url({{URL::asset('/images/IMG-20240517-WA0014.jpg')}});
     
" >

<br>
       <x-guest-layout >
        <x-authentication-card>
            {{-- <x-slot name="logo"></x-slot> --}}
            <div id="form-main " class="row col-12 "    >
 
                <div id="form-div">
            <x-validation-errors class="mb-4" />
    
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
    
            <form method="POST" action="{{ route('login') }}">
                @csrf
    
                
                <div class="wrap-input100 validate-input"  >
                    <span class="h3 mb-3">Email </span>
                    <input class="input100 mt-3" type="email"   name="email" :value="old('email')" required autofocus autocomplete="username" >
                   
                   
                </div>
                
               
                <div class="wrap-input100 validate-input"  >
    
                    <span class="h3 mb-3">   &nbsp; Password      <i class="bi bi-eye-slash" id="togglePassword"></i> </span>
                    <input   type="password" id="password" class="input100 mt-3"  name="password" required autocomplete="current-password" >
                
                   
                 
                </div> 
     
                <div class="flex items-center justify-start mt-4 ">
                   
    
                    <x-button class=" p-5 ms-5 col-4 " style="background-color:#0e3554;">
                    <span style="margin: 5px;font-weight:bolder;color:gold">
                        log in

                    </span>
                    </x-button>
                </div>
            </form>  
 
        </div>
     </div>
        </x-authentication-card>
    </x-guest-layout>
    
    <script>
        window.addEventListener("DOMContentLoaded", function () {
      const togglePassword = document.querySelector("#togglePassword");
    
      togglePassword.addEventListener("click", function (e) {
        // toggle the type attribute
        const type =
          password.getAttribute("type") === "password" ? "text" : "password";
        password.setAttribute("type", type);
        // toggle the eye / eye slash icon
        this.classList.toggle("bi-eye");
      });
    });
    </script>







</body>
</html>
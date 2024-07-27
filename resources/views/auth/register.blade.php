<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- <link rel="stylesheet" href="{{URL::asset('/css/register.css')}}"> --}}
    {{-- <link rel="stylesheet" href=" {{ URL::asset('css/form.css') }} " > --}}

    <title> register</title>
</head>
     
     <body style="
             
            background-size:cover;
  
  background-repeat: no-repeat;
  
     background-image: url({{URL::asset('/images/IMG-20240517-WA0014.jpg')}});
    
     ">  
     
<div   class="container"   >
   
 <x-guest-layout>
    <x-authentication-card>
        
        <x-slot name="logo">
         </x-slot>
 
    
            {{-- <div id="form-div"> --}}
        {{-- <h1 style="color:green">   إنشاء حساب </h1> <br> --}}
        <x-validation-errors class="mb-4" />
 
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf
 
    <span class="h3 mb-3">Full Name </span><br>
    <div class="input-group mb-3 mt-4">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
        <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
    </div> 
    <span class="h3 mb-3"> Email</span><br>
    <div class="input-group mb-3 mt-4">
        <span class="input-group-text" id="basic-addon1">@</span>
        <input type="email"   name="email" class="form-control"   aria-label="Username" aria-describedby="basic-addon1" required>
      </div>
 
      <span class="h3 mb-3"> Password   </span><br>
      <div class="input-group mb-3 mt-4">
          <span class="input-group-text" id="basic-addon1"><i class="bi bi-eye-slash" id="togglePassword"></i> </span>
          <input  type="password" id="password"    name="password" class="form-control"   aria-label="Username" aria-describedby="basic-addon1" required>
        </div>
        <span class="h3 mb-3"> Age   </span><br>
        <div class="input-group mb-3 mt-4">
            <span class="input-group-text" id="basic-addon1"><i class="bi bi-0-square"></i> </span>
            <input  type="number" id="age"    name="age" class="form-control"    required min="10" :value="old('age')">
          </div>
         
        
          <span class="h3 mb-3">Nationality </span><br>
          <div class="input-group mb-3 mt-4">
              <span class="input-group-text" id="basic-addon1"><i class="bi bi-globe2"></i></span>
              <input type="text" name="nationality" :value="old('nationality')" required autofocus   class="form-control"  aria-label="Username" aria-describedby="basic-addon1">
          </div> 
 
          <span class="h3 mb-3">Gendar   </span><br>
          <div class="  mb-3 mt-4">
            <input type="radio" id="male" name="gendar" value="male" class="ms-3" checked>
            <label for="male">male</label>
            <input type="radio" id="female" name="gendar" value="female" class="ms-3"  >
            <label for="female">female</label      
        
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif
            <div class="container-login100-form-btn mt-4  ms-4"  >
                <div class="wrap-login100-form-btn d-grid gap-4 col-1 mx-auto " >
                    <button   type="submit"  class="login100-form-btn   ms-7 col-11 "  name="submit"  style="padding: 15px;background-color:#0e3554;margin-left: 40px;color:gold" > Register </button>
                </div>
             </div>
        </form>
    {{-- </div> --}}
 
    </x-authentication-card>
</x-guest-layout>
 
</div>
<br>
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
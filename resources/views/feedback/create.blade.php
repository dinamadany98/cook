<!DOCTYPE html>
<html>
<head>
	<title>Contact us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{URL::asset('/css/contact.css')}}">
 <style>


.left{
    background-size:500px 600px;
	height: 100%;
    border-radius: 30px;
    background-image: url({{URL::asset('/images/IMG-20240517-WA0017.jpg')}}) ;

    	
}
</style>
</head>
<body>

    @if(Session::has('success'))
    <div class="alert alert-success" role="alert" style="background-color: #0e3554;color:azure;margin-bottom: 20px;margin-left:300px; width:56%; margin-top:50px;font-weight:bolder;text-align:center;border:black" >
      {{Session::get('success')}}
    </div>
    @endif
   <br><br>
	<div class="all ">
		<div class="box ">
			<div class="left"></div>
			<div class="right ">
				 
                 
                <form  method="POST" action="/feedback"   >
                    @csrf
                    <span style="font-weight: bolder;color:white;margin-left:-290px" class="h4">Name </span><br>
					<input type="text" class="field mt-1" name="name" placeholder="Your Full Name" required><br>
                    
                    <span style="font-weight: bolder;color:white;margin-left:-290px" class="h4" >Email </span><br>
                    <input type="email" class="field mt-1" name="email" placeholder="Your Email" required><br>

                    <span style="font-weight: bolder;color:white;margin-left:-290px" class="h4">Phone </span><br>
					<input type="text" class="field mt-1" name="phonenumber" placeholder="Your Phone Number " required><br>
                    
                    <span style="font-weight: bolder;color:white;margin-left:-250px" class="h4">Message </span><br>
				<textarea placeholder="Your Message" class="field mt-1" name="message" required></textarea>
					
					<input type="submit" value="Add Feedback" class="bt"><br><br>
                </form>
			</div>
		</div>
	</div>
    <br><br>
</body>
 
</html>
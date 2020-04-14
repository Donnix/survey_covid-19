<!DOCTYPE html>
<html lang="en">
<head>
	<title>Survey Covid-19</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('login/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/noui/nouislider.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/main.css')}}">
<!--===============================================================================================-->
<style>
            #first {
  background-color: yellow;
}
        </style>
        
         <style>
            #second {
  background-color: red;
}
        </style>
        
        <style>
            #third {
  background-color: green;
}
        </style>

</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form   class="contact100-form validate-form" >
			
				<span class="contact100-form-title">
				 Hasil	Survey Covid-19
				</span>
				<div class="wrap-input100  bg1 ">
					<input class="input100" type="text" name="name" readonly="readonly" value="Nama : {{$data->name}}">
				</div>

				<div class="wrap-input100 bg1 ">
					<input class="input100" type="text" name="email" readonly="readonly" value="EMAIL : {{$data->email}} ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<input class="input100" type="text" name="jumlah_ya" readonly="readonly" value="Total Ya : {{$data->jumlah_ya}}">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<input class="input100" type="text" name="jumlah_tidak" readonly="readonly" value="Total Tidak : {{$data->jumlah_tidak}}">
				</div>
				
	

		@if($data->jumlah_ya>-1 & $data->jumlah_ya <8)         
		<div class="wrap-input100 bg1 ">
				<input class="input100"  id="third"type="text" name="statsus" readonly="readonly" value="Resiko Terkena :Ringan ">
		</div>	
        @elseif($data->jumlah_ya>7 & $data->jumlah_ya<15)
		<div class="wrap-input100 bg1 ">
				<input class="input100" id="first" type="text" name="statsus" readonly="readonly" value="Resiko Terkena :Sedang ">
		</div>
        @else
		<div class="wrap-input100 bg1 ">
				<input class="input100" id="second" type="text" name="statsus" readonly="readonly" value="Resiko Terkena :Tinggi ">
		</div>
        @endif
				
		
				<div class="container-contact100-form-btn">
					<button type="submit" href="home"  class="contact100-form-btn">
						<span>
							Home
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/noui/nouislider.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/js/main.js')}}"></script>
   



    


</body>
</html>

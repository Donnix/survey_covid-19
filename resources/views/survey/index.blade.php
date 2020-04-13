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
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Survey Covid-19
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
					<span class="label-input100">FULL NAME *</span>
					<input class="input100" type="text" name="name" placeholder="Enter Your Name">
				</div>

				<div class="wrap-input100 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="email" placeholder="Enter Your Email ">
				</div>

				<div class="wrap-input100 validate-input bg1">
					<h5><b> A.Potensi Tertular di luar rumah</b></h5>
					<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>1. Saya pergi keluar rumah?</h6></span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio1" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								
									YA
								</label>
								<input class="input-radio100" id="radio1" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
							
									TIDAK
								</label>

							</div>
							
					</div>
					

					<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>2. Saya Menggunakan transportasi umum:online,angkot,bus,dll?</h6></span>

						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio3" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio3"> 
									YA
								</label>
								<input class="input-radio100" id="radio4" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio4">
									TIDAK
								</label>
							</div>
							</div>
					<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>3. Saya tidak memakai masker saat berkumpul dengan oranglain?</h6></span>

						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio5" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio5"> 
									YA
								</label>
								<input class="input-radio100" id="radio6" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio6">
									TIDAK
								</label>
							</div>
							
					</div>

						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>4. Saya berjabat tangan dengan orang lain?</h6></span>

						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio7" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio7"> 
									YA
								</label>
								<input class="input-radio100" id="radio8" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio8">
									TIDAK
								</label>
							</div>
							</div>

						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>5. Saya tidak membersihkan tangan dengan hand sanitizer/tissue basah sebelum berkendara?</h6></span>

						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio9" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio9"> 
									YA
								</label>
								<input class="input-radio100" id="radio10" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio10">
									TIDAK
								</label>
							</div>

						</div>

						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>6. Saya meneyentuh benda/uang orang lain?</h6></span>

						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio11" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio11"> 
									YA
								</label>
								<input class="input-radio100" id="radio12" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio12">
									TIDAK
								</label>
							</div>

						</div>

						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>7. Saya tidak menjaga jarak 1.5 meter dengan orang lain saat beraktivitas di luar rumah?</h6></span>

						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio13" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio13"> 
									YA
								</label>
								<input class="input-radio100" id="radio14" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio14">
									TIDAK
								</label>
							</div>
						
						</div>

						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>8. Saya Makan di tempat umum : restaurant/ warung?</h6></span>

						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio15" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio15"> 
									YA
								</label>
								<input class="input-radio100" id="radio16" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio16">
									TIDAK
								</label>
							</div>

						</div>
						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>9. Saya tidak minum air hangat & mencuci tangan setelah tiba di tujuan?</h6></span>

						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio17" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio17"> 
									YA
								</label>
								<input class="input-radio100" id="radio18" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio18">
									TIDAK
								</label>
							</div>
							
						</div>

						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>10. Saya berada di  wilayah kelurahan tempat pasien tertular ?</h6></span>

						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio19" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio19"> 
									YA
								</label>
								<input class="input-radio100" id="radio20" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio20">
									TIDAK
								</label>
							</div>

						</div>


				</div>

				<div class="wrap-input100 validate-input bg1">
					<h5><b> B.Potensi Tertular di dalam rumah</b></h5>
					<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>11. Saya tidak menyediakan hand sanitazer di sekitar sekitar rumah?></span>

						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio21" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio21"> 
									YA
								</label>
								<input class="input-radio100" id="radio22" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio22">
									TIDAK
								</label>
						</div>
					</div>
	

						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>12. Saya tidak cuci tangan dengan sabun setelah tiba di rumah?</h6></span>

							<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio23" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio23"> 
									YA
								</label>
								<input class="input-radio100" id="radio24" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio24">
									TIDAK
								</label>
							</div>
						</div>


						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>13. Saya tidak menyediakan antiseptis, masker, sabun untuk keluarga dirumah?</h6></span>

						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio25" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio25"> 
									YA	
								</label>
								<input class="input-radio100" id="radio26" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio26">
									TIDAK
								</label>
							</div>
						

						</div>

						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>14. Saya tidak segera merendam pakaian dari luar rumah dengan air panas/deterjen?</h6></span>
						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio27" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio27"> 
									YA
								</label>
								<input class="input-radio100" id="radio28" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio28">
									TIDAK
								</label>
							</div>
							</div>

						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>15. Saya tidak segera mandi keramas setelah berpergian dari luar rumah?</h6></span>

						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio29" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio29"> 
									YA
								</label>
								<input class="input-radio100" id="radio30" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio30">
									TIDAK
								</label>
							</div>
							</div>

						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>16. Saya tidak mensosialisasikan survey penilaian resiko ini kepada keluarga?</h6></span>

						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio31" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio31"> 
									YA
								</label>
								<input class="input-radio100" id="radio32" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio32">
									TIDAK
								</label>
							</div>
							</div>
				</div>

				<div class="wrap-input100 validate-input bg1">
					<h5><b> C.Daya Tahan Tubuh (IMUNITAS)</b></h5>
					<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>17. Saya dalam sehari tidak terkena matahari minimal 15 menit?></span>

						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio33" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio33"> 
									YA
								</label>
								<input class="input-radio100" id="radio34" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio34">
									TIDAK
								</label>
							</div>
							</div>
						
						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>18. Saya tidak jalan kaki/olahraga minimal 30 menit setiap hari?</h6></span>
						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio35" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio35"> 
									YA
								</label>
								<input class="input-radio100" id="radio36" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio36">
									TIDAK
								</label>
							</div>
							</div>

						
						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>19. Saya jarang minum vitamin C,E, dan kurang tidur?</h6></span>
						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio37" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio37"> 
									YA
								</label>
								<input class="input-radio100" id="radio38" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio38">
									TIDAK
								</label>
							</div>
							</div>
							
						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>20.  Usia Saya di atas 60 tahun?</h6></span>
						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio39" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio39"> 
									YA
								</label>
								<input class="input-radio100" id="radio40" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio40">
									TIDAK
								</label>
							</div>
							</div>

						<div class="wrap-contact100-form-checkbox">
						<span class="label-input100"><h6>21. Saya mempunyai penyakit :jantung/diabetes/gangguan pernafasan kronik?</h6></span>

						<div class="contact100-form-checkbox m-t-15">
								<input class="input-radio100" id="radio41" type="checkbox" name="checkboxyes" onclick="sum()" value="1" >
								<label class="label-radio100" for="radio41"> 
									YA
								</label>
								<input class="input-radio100" id="radio42" type="checkbox" name="checkboxno" onclick="sumno()" value="1">
								<label class="label-radio100" for="radio42">
									TIDAK
								</label>
							</div>
						</div>
			
				</div>

				
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">JUMLAH YA </span>
					<input class="input100" type="text" name="valueyes" readonly="readonly">
				</div>
				
				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">JUMLAH TIDAK </span>
					<input class="input100" type="text" name="valueno" readonly="readonly">
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							CEK
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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>


<script>
  function sum() {
  var input = document.getElementsByName("checkboxyes");
  var total = 0;
  for (var i = 0; i < input.length; i++) {
    if (input[i].checked) {
      total += parseFloat(input[i].value);
    }
  }
  document.getElementsByName("valueyes")[0].value =total;
}

function sumno() {
  var input = document.getElementsByName("checkboxno");
  var total = 0;
  for (var i = 0; i < input.length; i++) {
    if (input[i].checked) {
      total += parseFloat(input[i].value);
    }
  }
  document.getElementsByName("valueno")[0].value =total;
}
</script>




</body>
</html>

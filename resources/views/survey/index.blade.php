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
			<form  action="{{ route('survey.store') }}" method="POST" class="contact100-form validate-form" >
            @csrf
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
					<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>1. Saya pergi keluar rumah?</h6></span>

							<div class="contact100-form-radio m-t-15">
								<input  id="radio1" type="radio" name="pertanyaan1"  value="1" >
								<label for="ya1"> 
									YA
								</label>
								<input  id="radio1" type="radio" name="pertanyaan1"  value="0">
								<label for="tidak1"> 
									TIDAK
								</label>
							</div>
					</div>
					

					<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>2. Saya Menggunakan transportasi umum:online,angkot,bus,dll?</h6></span>

				
						<div class="contact100-form-radio m-t-15">
								<input  id="radio2" type="radio" name="pertanyaan2" value="1" >
								<label for="ya2"> 
									YA
								</label>
								<input  id="radio2" type="radio" name="pertanyaan2" value="0
								">
								<label for="tidak2"> 
									TIDAK
								</label>
							</div>
							</div>
					<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>3. Saya tidak memakai masker saat berkumpul dengan oranglain?</h6></span>

						<div class="contact100-form-radio m-t-15">
								<input  id="radio3" type="radio" name="pertanyaan3"  value="1" >
								<label for="ya3"> 
									YA
								</label>
								<input  id="radio3" type="radio" name="pertanyaan3" value="0">
								<label for="tidak3">
									TIDAK
								</label>
							</div>
							
					</div>

						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>4. Saya berjabat tangan dengan orang lain?</h6></span>

						<div class="contact100-form-radio m-t-15">
								<input  id="radio4" type="radio" name="pertanyaan4"  value="1" >
								<label for="ya4"> 
									YA
								</label>
								<input  id="radio4" type="radio" name="pertanyaan4" value="0">
								<label for="tidak4">
									TIDAK
								</label>
							</div>
							</div>

						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>5. Saya tidak membersihkan tangan dengan hand sanitizer/tissue basah sebelum berkendara?</h6></span>

						<div class="contact100-form-radio m-t-15">
								<input  id="radio5" type="radio" name="pertanyaan5"  value="1" >
								<label for="ya5"> 
									YA
								</label>
								<input  id="radio5" type="radio" name="pertanyaan5" value="0">
								<label for="tidak5">
									TIDAK
								</label>
							</div>

						</div>

						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>6. Saya meneyentuh benda/uang orang lain?</h6></span>

						<div class="contact100-form-radio m-t-15">
								<input  id="radio6" type="radio" name="pertanyaan6"  value="1" >
								<label for="ya6"> 
									YA
								</label>
								<input  id="radio6" type="radio" name="pertanyaan6" value="0">
								<label for="tidak6">
									TIDAK
								</label>
							</div>

						</div>

						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>7. Saya tidak menjaga jarak 1.5 meter dengan orang lain saat beraktivitas di luar rumah?</h6></span>

						<div class="contact100-form-radio m-t-15">
								<input  id="radio7" type="radio" name="pertanyaan7"  value="1" >
								<label for="ya7"> 
									YA
								</label>
								<input  id="radio7" type="radio" name="pertanyaan7" value="0">
								<label for="tidak7">
									TIDAK
								</label>
							</div>
						
						</div>

						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>8. Saya Makan di tempat umum : restaurant/ warung?</h6></span>

						<div class="contact100-form-radio m-t-15">
								<input  id="radio8" type="radio" name="pertanyaan8"  value="1" >
								<label for="ya8"> 
									YA
								</label>
								<input  id="radio8" type="radio" name="pertanyaan8" value="0">
								<label for="tidak8">
									TIDAK
								</label>
							</div>

						</div>
						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>9. Saya tidak minum air hangat & mencuci tangan setelah tiba di tujuan?</h6></span>

						<div class="contact100-form-radio m-t-15">
								<input  id="radio9" type="radio" name="pertanyaan9"  value="1" >
								<label for="ya9"> 
									YA
								</label>
								<input  id="radio9" type="radio" name="pertanyaan9" value="0">
								<label for="tidak8">
									TIDAK
								</label>
							</div>
							
						</div>

						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>10. Saya berada di  wilayah kelurahan tempat pasien tertular ?</h6></span>

						<div class="contact100-form-radio m-t-15">
								<input  id="radio10" type="radio" name="pertanyaan10"  value="1" >
								<label for="ya10"> 
									YA
								</label>
								<input  id="radio10" type="radio" name="pertanyaan10" value="0">
								<label for="tidak10">
									TIDAK
								</label>
							</div>

						</div>
		

				</div>

				<div class="wrap-input100 validate-input bg1">
					<h5><b> B.Potensi Tertular di dalam rumah</b></h5>
					<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>11. Saya tidak menyediakan hand sanitazer di sekitar sekitar rumah?></span>

						<div class="contact100-form-radio m-t-15">
								<input  id="radio11" type="radio" name="pertanyaan11"  value="1" >
								<label for="ya11"> 
									YA
								</label>
								<input  id="radio11" type="radio" name="pertanyaan11" value="0">
								<label for="tidak11">
									TIDAK
								</label>
						</div>
					</div>
	

						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>12. Saya tidak cuci tangan dengan sabun setelah tiba di rumah?</h6></span>

							<div class="contact100-form-radio m-t-15">
								<input  id="radio12" type="radio" name="pertanyaan12"  value="1" >
								<label for="ya12"> 
									YA
								</label>
								<input  id="radio12" type="radio" name="pertanyaan12" value="0">
								<label for="tidak12">
									TIDAK
								</label>
							</div>
						</div>


						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>13. Saya tidak menyediakan antiseptis, masker, sabun untuk keluarga dirumah?</h6></span>

						<div class="contact100-form-radio m-t-15">
								<input  id="radio13" type="radio" name="pertanyaan13"  value="1" >
								<label for="ya13"> 
									YA	
								</label>
								<input  id="radio13" type="radio" name="pertanyaan13" value="0">
								<label for="tidak14">
									TIDAK
								</label>
							</div>
						

						</div>

						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>14. Saya tidak segera merendam pakaian dari luar rumah dengan air panas/deterjen?</h6></span>
						<div class="contact100-form-radio m-t-15">
								<input  id="radio14" type="radio" name="pertanyaan14"  value="1" >
								<label for="ya14"> 
									YA
								</label>
								<input  id="radio14" type="radio" name="pertanyaan14" value="0">
								<label for="tidak14">
									TIDAK
								</label>
							</div>
							</div>

						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>15. Saya tidak segera mandi keramas setelah berpergian dari luar rumah?</h6></span>

						<div class="contact100-form-radio m-t-15">
								<input  id="radio15" type="radio" name="pertanyaan15"  value="1" >
								<label for="ya15"> 
									YA
								</label>
								<input  id="radio15" type="radio" name="pertanyaan15" value="0">
								<label for="tidak15">
									TIDAK
								</label>
							</div>
							</div>

						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>16. Saya tidak mensosialisasikan survey penilaian resiko ini kepada keluarga?</h6></span>

						<div class="contact100-form-radio m-t-15">
								<input  id="radio16" type="radio" name="pertanyaan16"  value="1" >
								<label for="ya16"> 
									YA
								</label>
								<input  id="radio16" type="radio" name="pertanyaan16" value="0">
								<label for="tidak16">
									TIDAK
								</label>
							</div>
							</div>
				</div>

				<div class="wrap-input100 validate-input bg1">
					<h5><b> C.Daya Tahan Tubuh (IMUNITAS)</b></h5>
					<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>17. Saya dalam sehari tidak terkena matahari minimal 15 menit?></span>

						<div class="contact100-form-radio m-t-15">
								<input  id="radio17" type="radio" name="pertanyaan17"  value="1" >
								<label for="ya17"> 
									YA
								</label>
								<input  id="radio17" type="radio" name="pertanyaan17" value="0">
								<label for="tidak17">
									TIDAK
								</label>
							</div>
							</div>
						
						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>18. Saya tidak jalan kaki/olahraga minimal 30 menit setiap hari?</h6></span>
						<div class="contact100-form-radio m-t-15">
								<input  id="radio18" type="radio" name="pertanyaan18"  value="1" >
								<label for="ya18"> 
									YA
								</label>
								<input  id="radio18" type="radio" name="pertanyaan18" value="0">
								<label for="tidak18">
									TIDAK
								</label>
							</div>
							</div>

						
						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>19. Saya jarang minum vitamin C,E, dan kurang tidur?</h6></span>
						<div class="contact100-form-radio m-t-15">
								<input  id="radio19" type="radio" name="pertanyaan19"  value="1" >
								<label for="ya19"> 
									YA
								</label>
								<input  id="radio19" type="radio" name="pertanyaan19" value="0">
								<label for="tidak19">
									TIDAK
								</label>
							</div>
							</div>
							
						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>20.  Usia Saya di atas 60 tahun?</h6></span>
						<div class="contact100-form-radio m-t-15">
								<input  id="radio20" type="radio" name="pertanyaan20"  value="1" >
								<label for="ya20"> 
									YA
								</label>
								<input  id="radio20" type="radio" name="pertanyaan20" value="0">
								<label for="tidak20">
									TIDAK
								</label>
							</div>
							</div>

						<div class="wrap-contact100-form-radio">
						<span class="label-input100"><h6>21. Saya mempunyai penyakit :jantung/diabetes/gangguan pernafasan kronik?</h6></span>

						<div class="contact100-form-radio m-t-15">
								<input  id="radio21" type="radio" name="pertanyaan21"  value="1" >
								<label for="ya21"> 
									YA
								</label>
								<input  id="radio21" type="radio" name="pertanyaan21" value="0">
								<label for="tidak21">
									TIDAK
								</label>
							</div>
						</div>
			
				</div>

			
					<input class="input100" type="hidden"  id="jumlah_ya"name="jumlah_ya" >
					<input class="input100" type="hidden" id="jumlah_tidak" name="jumlah_tidak">
			
				<div class="container-contact100-form-btn">
					<button type="submit" onclick="sum()" class="contact100-form-btn">
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
   
    <script>
    function sum(){
        var items = document.querySelectorAll('#radio1,#radio2, #radio3, #radio4, #radio5, #radio6, #radio7, #radio8, #radio9, #radio10, #radio11, #radio12,#radio13, #radio14, #radio14,#radio15,#radio15,#radio16, #radio17, #radio18, #radio19, #radio20, #radio21');
    var total= 0 ; 
	var tidak= 0;
	var x    = 21;

    for(var i= 0; i < items.length; i++){
        if(items[i].checked){
            total += parseInt(items[i].value);
			tidak= x- total;
        }
	         }
    document.getElementsByName('jumlah_ya')[0].value =total;
	document.getElementsByName('jumlah_tidak')[0].value =tidak;
  
   }


      </script>


</body>
</html>

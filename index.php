
<!DOCTYPE HTML>
<html>
<head>
<title>Online Bus Pass System | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">

<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>

</head>
<body>

<div class="top-header">
	<div class="container">
		<marquee style="color: #fff">Online Bus Pass Management System Project by : Veena Parate & Shruti Nair  |  Guide - Nisarga Sabale
</marquee>
		<div class="clearfix"></div>
	</div>
</div>


<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php">Bus<span>pass System</span></a>	
		</div>
		<div class="bus wow fadeInUp animated" data-wow-delay=".5s">
            <a href="#registration_section"  class="buses active">REGISTRATION</a>
            <a href="panel/student.php">LOGIN</a>
        </div>
		
		<div class="clearfix"></div>
	</div>
</div>


<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
								<div class="clearfix"></div>
						</ul>
					</nav>
				</div>	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>


<div class="banner">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> MY ONLINE BUS PASS SYSTEM</h1>
	</div>
</div>
<section id="registration_section">
<div class="container">
	<div class="col-md-5 bann-info1 wow fadeInLeft animated" data-wow-delay=".5s">
		<i class="fa fa-columns"></i>
		<h3>WORLD'S MOST TRAVEL BRAND</h3>
	</div>
	<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
	
<h2>Student Online Bus Pass Booking</h2>
			<form action="panel/pages/save.php" method="post" enctype="multipart/form-data">

 			<div class="ban-top">
			<div class="bnr-left">
				<label class="inputLabel">First Name</label>
				<input type="text" name="sfname" placeholder="First Name" id="event" onkeydown="return alphaOnly(event);" required="">
               </div>
			<div class="bnr-left">
				<label class="inputLabel">Last Name</label>
				<input type="text"  name="slname" id="lname"  id="event" onkeydown="return alphaOnly(event);" placeholder="Last Name" required="">
                 </div>
				<div class="clearfix"></div>
		</div>
		<div class="ban-bottom">
			<div class="bnr-right">
				<label class="inputLabel">Bonafide Certificate No.</label>
				<input type="text" name="regno"  placeholder="Bonafide Certificate No." id="event" required>

				
                	</div>

			                                        <div class="ban-top">
			<div class="bnr-left">
				<label class="inputLabel">Email</label>
				  <input type="text" name="semail" class="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="Email" required>
                                               	</div>

			<div class="bnr-left"><br>

				<label class="inputLabel">Password</label>


				<input type="password" name="password" id="password" placeholder="Password"    class="city" required style=" height:40px; width:320px; " ></div>
			</div>
			<div class="bnr-left"><br>
				<label class="inputLabel">Confirm Password</label>
				
				<input type="password" name="cpassword" id="confirm_password" placeholder="Confirm Password"    class="" style=" height: 40px; width:320px; " required>
               </div>
			
				<div class="clearfix"></div>
		</div>
		        <div class="ban-top">
			<div class="bnr-left">
				    </div>
		</div>


		
<div class="ban-top">
			<div class="bnr-left">
				             	</div>
			<div class="bnr-left">
					</div>
				<div class="clearfix"></div>
		</div>

		<div class="ban-top">
			<div class="bnr-left"><br>
				<label class="inputLabel">Date Of Birth</label>
	
<input type="date" name="sdob" class="" placeholder="Birth Date" style=" height: 40px; width:320px; " required>
                                               			     </div>
			<div class="bnr-left"><br>
				<label class="inputLabel">Parents Contact</label>
				<input type="text" name="scontact" class="" placeholder="Parents Contact Number" id="tbNumbers" minlength="10" maxlength="10" onkeypress="javascript:return isNumber(event)" required="">
                 </div>
				<div class="clearfix"></div>
		</div>
	
		<div class="ban-bottom">
			<div class="bnr-right">
					<label class="inputLabel">Gender</label>
<select type="text" name="sgender"   class="city" placeholder="Class" required="" style=" height:40px; width:320px; " required >
                 <option value="">--Select Gender--</option>
                                                     <option value="Male">Male</option>
                                                      <option value="Female">Female</option>
                                                   </select>
            
				 </div>
			<div class="bnr-right">
				<label class="inputLabel">Address</label>
				<textarea class="" rows="4"  cols="37"   name="saddress" placeholder="Address" style=""  style=" height: 40px; width:350px; " required></textarea>
                
			 </div>
		
		
				<div class="clearfix"></div>




				 			<div class="ban-top">
			<div class="bnr-left">
								<label class="inputLabel"> Upload Photocopy</label>

				                         <input type="file" class="" name="image" required>

				 </div>
			<div class="bnr-left">
				<label class="inputLabel"> Upload Bonafide</label>
                          <input type="file" class="" name="image2" required>
               </div>
				<div class="clearfix"></div>
		</div>
				
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
						});
					</script>
			
		</div>

		<div class="sear">
				<button class="seabtn" name="btn_save">SUBMIT</button>
			</form>
		</div>
	</div>
	</section>
	<div class="clearfix"></div>
</div>


<div class="copy-right">
	<div class="container">
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2021 Online Bus Pass System. All Rights Reserved | Design by  <a href="#" target="_blank">BUS PASS SYSTEM</a> </p>
	</div>
</div>
</body>
</html>
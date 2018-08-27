<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Patient</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="easyclinic" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- //custom-theme -->
<link href="assests/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="assests/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="center-container">
		<div class="main">
			<h1 class="w3layouts_head">Add Patient Info</h1>
			<h1 class="w3layouts_head">Welcome Dr.Atef</h1>
				<div class="w3layouts_main_grid">


					<form action="#" method="post" class="w3_form_post">
		

<!-- day/time -->
            <div class="agileits_w3layouts_main_grid w3ls_main_grid">
              <span class="agileinfo_grid">
                <label>Examination Date</label>
                <div class="agileits_w3layouts_main_gridl">
                  <input class="date hasDatepicker" id="datepicker" name="Text" type="text" value="dd/mm/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                </div>
                <div class="agileits_w3layouts_main_gridr">
                  <input type="time" name="Time" placeholder=" " required="">
                </div>
                  <div class="clear"> </div>
              </span>
            </div>

<!--  name -->


            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Patient Full Name </label>
                <input type="text" name="Task" placeholder=" 4 part name" required="">
              </span>
            </div>
<!-- email  -->
            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Patient Email </label>
                <input type="text" name="Task" placeholder=" Email" required="">
              </span>
            </div>
<!-- Phone number -->
            <div class="w3_agileits_main_grid w3l_main_grid">
              <span class="agileits_grid">
                <label>Patient Number </label>
                <input type="text" name="Task" placeholder="Phone Number" required="">
                </span>
            </div>
<!-- choose your Gender-->
          <div class="content-w3ls">
            <div class="form-w3ls">
              <div class="content-wthree2">
                <div class="grid-w3layouts1">
                  <div class="w3-agile1">
                    <label>Gender</label>
                    <ul>
                      <li>
                        <input type="radio" id="a-option" name="selector1">
                        <label for="a-option">Male </label>
                        <div class="check"></div>
                      </li>
                      <li>
                        <input type="radio" id="b-option" name="selector1">
                        <label for="b-option">female</label>
                        <div class="check"><div class="inside"></div></div>
                      </li>
                    </ul>
                  </div>  
                </div>
<!--  age -->
                <div class="w3_agileits_main_grid w3l_main_grid">
                  <span class="agileits_grid">
                    <label>Patient Age </label>
                    <input type="text" name="Task" placeholder="Patient Age" required="">
                  </span>
                </div>

                <div class="clear"></div>
              </div>
            </div>
<!--  weight -->

                <div class="w3_agileits_main_grid w3l_main_grid">
                  <span class="agileits_grid">
                    <label>Weight</label>
                    <input type="text" name="Task" placeholder="Weight in KiloGrams" required="">
                  </span>
                </div>
<!--  Height -->

                <div class="w3_agileits_main_grid w3l_main_grid">
                  <span class="agileits_grid">
                    <label>Height</label>
                    <input type="text" name="Task" placeholder="Height in CentiMeters" required="">
                  </span>
                </div>
<!--  Glucose -->

                <div class="w3_agileits_main_grid w3l_main_grid">
                 <span class="agileits_grid">
                   <label>Glucose Test</label>
                   <input type="text" name="Task" placeholder="~100~140" required="">
                 </span>
                </div>

<!--  Heart pressure -->
                <div class="w3_agileits_main_grid w3l_main_grid">
                  <span class="agileits_grid">
                    <label>Blood Pressure</label>
                    <input type="text" name="Task" placeholder="~120~180" required="">
                  </span>
                </div>
<!-- Uoload File -->
            <div>
            <span class="agileits_grid">  
            <label>Upload sonar image</label>
            <form method="post" enctype="multipart/form-data" action="upload"></br>
                  Choose a file: 
            <input type="image" name="uploadedFile" /> 
            <input type="submit" />
            </form>
            </div>
<!-- Uoload File -->
            <div>
            <span class="agileits_grid">  
            <label>Upload cbc image</label>
            <form method="post" enctype="multipart/form-data" action="upload">
                  Choose a file: 
            <input type="image" name="uploadedFile" /> 
            <input type="submit" />
            </form>
            </div>

<!-- day/time -->

            <div class="agileits_w3layouts_main_grid w3ls_main_grid">
              <span class="agileinfo_grid">
                <label>Expectation of Childbirth</label>
                <div class="agileits_w3layouts_main_gridl">
                  <input class="date hasDatepicker" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                </div>
                <div class="agileits_w3layouts_main_gridr">
                  <input type="time" name="Time" placeholder=" " required="">
                </div>
                  <div class="clear"> </div>
              </span>
            </div>  


<!-- submit button -->

					<div class="w3_main_grid">
						<div class="w3_main_grid_right">
							<input type="submit" value="Submit">
						</div>
					</div>
				</form>
			</div>




		<!-- Calendar -->
			<link rel="stylesheet" href="assests/css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
					<script>
						$(function() {
							$( "#datepicker" ).datepicker();
						});
					</script>
		<!-- //Calendar -->



			<div class="w3layouts_copy_right">
				<div class="container">
					<p>© 2018 Patient Registration Form. All rights reserved |  <a href="http://w3layouts.com">HassanAli</a></p>
				</div>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>
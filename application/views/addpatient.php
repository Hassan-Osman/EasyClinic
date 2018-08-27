<!DOCTYPE html>
<html>
  <head>
    <title>Add Patient</title>
    
       
       <link rel="stylesheet" type="text/css" href="assests/css/styles.css"/>
       
  </head>

  <body>
    <script src="assests/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assests/js/jquery-ui.js"></script>
 



<!--  form start-->
<h1>Hassan Ali Raafat</h1> 
  <form>
<h1>Hassan Ali Raafat</h1>
<div class="w3layouts_main_grid">
          <form action="#" method="post" class="w3_form_post">


<!-- day/time -->
            <div class="agileits_w3layouts_main_grid w3ls_main_grid">
              <span class="agileinfo_grid">
                <label>Examination Date</label>
                <div class="agileits_w3layouts_main_gridl">
                  <input class="date hasDatepicker" id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
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

<!-- Submit Button -->

          <div class="w3_main_grid">
            <div class="w3_main_grid_right">
              <input type="submit" value="Submit">
            </div>
          </div>
        </form>
      </div>
    </form>
<!--  form end-->
  
  </body>
</html>
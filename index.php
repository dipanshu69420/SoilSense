<!DOCTYPE html>
<html>
<?php include ('header.php');  ?>

  <body class="bg-white" id="top">
  
<?php include ('nav.php');  ?>

<div class="wrapper" >

    <div class="wrapper">
      <header class="jumbotron bg-dark ">
        <div class="container">
          <div class="row row-header">
            <div class="col-12 col-sm-7">
              <h1 class="text-white">SoilSense : Soil Analysing and Crop Recommendation</h1>
              <p class="text-white">
               Farmer's Friend.
              </p>
              <div class="cg">
                <div class="card card-body">
                  <blockquote cite="blockquote">
                    <h6 class="mb-0 text-dark">
                      <em
                        ><b
                          > “Farming looks mighty easy when your plow is a pencil, and you're a thousand miles from the corn field..”</b
                        ></em
                      >
                    </h6>
                    <br />

                    <footer class="blockquote-footer vg text-dark">
                      DWIGHT D. EISENHOWER
                    </footer>
                  </blockquote>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-3 offset-sm-2 align-self-center">
              <img src="assets/img/smart-farming.png" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </header>
<!-- Page Content -->

<!-- ======================================================================================================================================== -->

    <div class="section features-6 text-dark bg-white" id="services">
      <div class="container ">

        <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h3 class="display-3 ">Features</h3>
                </div>
            </div>
			<br>
			
        <div class="row align-items-center">
		
          <div class="col-lg-6">
            <div class="info-horizontal bg-dark ">
              <div class="description pl-4">
                <h3 class="title text-white bg-dark" >Farmers</h3>
           <p class="bg-dark text-white ">Farmers can get recommendations for crop, can perform Soil Analysis
            and get the desired suggestions for the result. All these are implemented using ML with proper dataset. </p>
                        
              </div>
            </div>

          </div>
		  
		  
          <div class="col-lg-6 col-10 mx-md-auto d-none d-md-block">
            <img class="ml-lg-5  pull-right" src="assets/img/agri.png" width="100%">
          </div>
        </div>
		
		

      </div>
    </div>
    <!-- <style>
      .info-hover-dark:hover{
        background-color: black;
        color: white;
      }
    </style> -->

     
<!-- ======================================================================================================================================== -->

      <div class="section features-2 text-dark bg-white" id="features"> 
        <div class="container"> 
          <div class="row align-items-center"> 
            <div class="col-lg-5 col-md-8 mr-auto text-left"> 
              <div class="pr-md-5"> 
                <!-- <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle mb-5"> <i class="ni ni-favourite-28"> </i></div> -->
                <h3 class="display-3 text-justify">Features</h3>
                <p>The time is now for the next step in farming. We bring you the future of farming along with great tools for asisting the farmers.</p>
                <ul class="list-unstyled mt-5"> 
                  <li class="py-2"> 
                    <div class="d-flex align-items-center"> 
                      <div>
                        <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-settings-gear-65"> </i></div>
                      </div>
                      <div>
                        <h6 class="mb-0"><a href="crop_recommendation.php" class="text-dark">Crop Recommendation</h6></a>
                      </div>
                    </div>
                  </li>
                  <li class="py-2"> 
                    <div class="d-flex align-items-center"> 
                      <div>
                        <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-html5"> </i></div>
                      </div>
                      <div>
                        <h6 class="mb-0"><a href="crop_prediction.php" class="text-dark">Soil Analysis</h6></a>
                      </div>
                    </div>
                  </li>
                  <li class="py-2"> 
                    <div class="d-flex align-items-center"> 
                      <div>
                        <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-settings-gear-65"> </i></div>
                      </div>
                      <div>
                        <h6 class="mb-0"><a href="fertilizer_recommendation.php" class="text-dark">Suggestion based on Soil Analysis</h6></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
			

		  
            <div class="col-lg-7 col-md-12 pl-md-0"> 
 <img class="img-fluid ml-lg-5" src="assets/img/features.png" width="100%">
 </div>
			
			
          </div>
        </div>
        <span > </span>
      </div>
      
<?php require("footer.php");?>


</body>

</html>
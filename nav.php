    <nav
      id="navbar-main"
      class="
        navbar navbar-main navbar-expand-lg
        bg-dark
        navbar-light
        position-sticky
        top-0
        shadow
        py-0

      "
    >
    <style>
      .head{
        color: white;
        padding-top: 10px;
      }
    </style>
      <div class="container-fluid">
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item dropdown">
            <a href="index.php" class="navbar-brand mr-lg-5 text-white">
                               <h2 class="head">SoilSense</h2>
            </a>
          </li>
        </ul>

        <button
          class="navbar-toggler bg-white"
          type="button"
          data-toggle="collapse"
          data-target="#navbar_global"
          aria-controls="navbar_global"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="navbar-collapse collapse bg-dark" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-10 collapse-brand">
                <a href="index.html">
                  <img src="assets/img/nav.png" />
                </a>
              </div>
              <div class="col-2 collapse-close bg-danger">
                <button
                  type="button"
                  class="navbar-toggler"
                  data-toggle="collapse"
                  data-target="#navbar_global"
                  aria-controls="navbar_global"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>

          <ul class="navbar-nav align-items-lg-center ml-auto topnav" id="nav">
		  
		  	 
		  
	 <li class="nav-item" id="prediction">
			   <div>
		  <a class="nav-link text-white " href="crop_prediction.php" >
		                  <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-magic"></i>Soil Analysis</span
                >
		  </a>

		   <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
		   <a class="dropdown-item" href="crop_prediction.php">Soil Analysis</a>
		   <a class="dropdown-item" href="yield_prediction.php">Yield Prediction​</a>
			<a class="dropdown-item" href="rainfall_prediction.php">Rainfall Prediction​</a>
		  </div> -->
		</div>
			</li>
			
			
			
			 <li class="nav-item" id="recommendation">
			   <div class="dropdown show ">
		  <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-gavel"></i> Recommendation</span
                >
		  </a>

		   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<a class="dropdown-item" href="crop_recommendation.php">Crop Recommendation​</a>
			<a class="dropdown-item" href="fertilizer_recommendation.php">Fertilizer Recommendation​</a>
		  </div>
		</div>
			</li>
			


          </ul>
        </div>
      </div>
    </nav>
	
	

<style>
.topnav a {
  border-bottom: 3px solid transparent;
}

.topnav a:hover {
  border-bottom: 3px solid red;
}

.topnav a.activa {
  border-bottom: 3px solid red;
}

</style>	
	
  <script>
$("#nav li a").each(function() {   
    if (this.href == window.location.href) {
        $(this).addClass("activaa");
    }
});
  </script>
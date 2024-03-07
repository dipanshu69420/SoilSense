

<!DOCTYPE html>
<html>
<?php include ('header.php');  ?>

  <body class="bg-black" id="top">
  
<?php include ('nav.php');  ?>

 
	<section class="section section-shaped section-lg" style="background-image: url('crop.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
    <div class="shape shape-style-1 shape-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
<!-- ======================================================================================================================================== -->

<div class="container">		
          <div class="row row-content">
            <div class="col-md-12 ">

				<div class="card text-white bg-white mb-4">
				  <div class="card-header bg-dark">
				  <span class=" text-success display-4 text-white pt-2" >Crop Recommendation</span>	
				  <span class="pull-right">
		
</span>		
				
				</div>

				  <div class="card-body text-dark">
				     <form role="form" action="#" method="post" >     
					 
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
					<th class="text-black bg-gradient-success"><center> Nitrogen</center></th></span>
					<th class="text-black bg-gradient-success"><center>Phosporous</center></th>
					<th class="text-black bg-gradient-success"><center>Potassium</center></th>
					<th class="text-black bg-gradient-success"><center>Temparature</center></th>

					
        </tr>
    </thead>
 <tbody>
                                 <tr class="text-center">
                                    <td>
                                    	<div class="form-group">
											<input type = 'text' name = 'n' step=0.01 placeholder="Nitrogen" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'text' name = 'p' step=0.01 placeholder="Phosphorus" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'k' step=0.01 placeholder="Pottasium" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 't' step =0.01 placeholder="Temperature" required class="form-control">
											
										</div>
                                    </td>
									<br>
									</table>
									<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">
									<thead>
									<tr class="font-weight-bold text-default">
										<th class="text-black bg-gradient-success"><center>Humidity</center></th>
										<th class="text-black bg-gradient-success"><center>PH</center></th>
										<th class="text-black bg-gradient-success"><center>Rainfall</center></th>
									</tr>
									</thead>
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'h' step =0.01 placeholder="Humidity" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'ph' step =0.01 placeholder="PH" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group ">
											 <input type = 'number' name = 'r' step =0.01 placeholder="Rainfall" required class="form-control">
											
										</div>
                                    </td>
                                </tr>
                            </tbody>
							
					
	</table>
	<button type="submit" class="btn btn-warning btn-submit ml-100 pull-right ">SUBMIT</button>
	</form>
</div>
</div>
<br>

<div class="card text-black bg-white mb-3">
				  <div class="card-header bg-dark text-white text-center">
				  <span class=" text-success display-4 bg-dark text-white" > Result  </span>					
				  </div>

				  <h4 class=" text-center" style="padding: 10px;">
					<?php

						$url = 'http://127.0.0.1:5000/predict'; // Change the URL to match your Flask API endpoint

						$data = array(
							'N' => $_POST['n'],
							'P' => $_POST['p'],
							'K' => $_POST['k'],
							'temperature' => $_POST['t'],
							'humidity' => $_POST['h'],
							'pH' => $_POST['ph'],
							'rainfall' => $_POST['r']
						);

						$data_string = json_encode($data);

						$ch = curl_init($url);
						curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
						curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						curl_setopt($ch, CURLOPT_HTTPHEADER, array(
							'Content-Type: application/json',
							'Content-Length: ' . strlen($data_string))
						);

						$result = curl_exec($ch);
						curl_close($ch);

						$response = json_decode($result, true);

						if (isset($response['output'])) {
							echo "Value of N, P, K are : ".$_POST['n'].", ".$_POST['p'].", ".$_POST['k']."<br>";
    						echo "Prediction: " . $response['output'];
						} 
						else {
    						echo "Prediction not available.";
						}
						?>
					</h4>
            </div>
 
	
	
            </div>
          </div>  
       </div>
		 
</section>

    <?php require("footer.php");?>

</body>
</html>


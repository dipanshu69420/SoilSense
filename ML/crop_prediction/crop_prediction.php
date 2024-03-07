

<!DOCTYPE html>
<html>
	<?php 
	error_reporting(E_ALL);
	?>
<?php 
include ('header.php');  ?>

  <body class="bg-white" id="top">
  
<?php include ('nav.php');  ?>

 
  <section class="section section-shaped section-lg" style="background-image: url('soil.jpg'); background-repeat: no-repeat; background-size: 100% 100%;">
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

<div class="container ">
    
    	 <div class="row row-content">
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 ">

				<div class="card text-white bg-white mb-3">
				  <div class="card-header bg-dark">
				  <span class=" text-success display-4 text-white" >Soil Analysis</span>
				 
					
				  </div>

				  <div class="card-body text-dark">
				     <form role="form" action="http://localhost:5000/soil_analysis" method="get" >     
					 
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

				<thead>
				<tr class="font-weight-bold text-default">
				<th class="text-black bg-gradient-success"><center>Nitrogen</center></th></span>
				<th class="text-black bg-gradient-success"><center>Phosporous</center></th>
				<th class="text-black bg-gradient-success"><center>Potassium</center></th>
				<th class="text-black bg-gradient-success"><center>pH</center></th>
				<th class="text-black bg-gradient-success"><center>EC</center></th>
				<th class="text-black bg-gradient-success"><center>OC</center></th>

			
</tr>
</thead>
 <tbody>
                                 <tr class="text-center">
                                    <td>
                                    	<div class="form-group">
											<input type = 'number' name = 'n' placeholder="Nitrogen" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'p' placeholder="Phosphorus" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'k' placeholder="Potassium" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'ph' step =0.01 placeholder="pH" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'ec' step =0.01 placeholder="EC" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'oc' step =0.01 placeholder="OC" required class="form-control">
											
										</div>
                                    </td>
								</tr>
</tbody>
</table>
<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

				<thead>
				<tr class="font-weight-bold text-default">
				<th class="text-black bg-gradient-success"><center>S</center></th></span>
				<th class="text-black bg-gradient-success"><center>Zn</center></th>
				<th class="text-black bg-gradient-success"><center>Fe</center></th>
				<th class="text-black bg-gradient-success"><center>Cu</center></th>
				<th class="text-black bg-gradient-success"><center>Mn</center></th>
				<th class="text-black bg-gradient-success"><center>B</center></th>

			
</tr>
</thead>
								<tr class="text-center">
									<td>
                                    	<div class="form-group">
											 <input type = 'float' name = 's' step =0.01 placeholder="Sulphur" required class="form-control">
											
										</div>
                                    </td>

									<td>
                                    	<div class="form-group">
											 <input type = 'float' name = 'zn' step =0.01 placeholder="Zinc" required class="form-control">
											
										</div>
                                    </td>

									<td>
                                    	<div class="form-group">
											 <input type = 'float' name = 'fe' step =0.01 placeholder="Iron" required class="form-control">
											
										</div>
                                    </td>

									<td>
                                    	<div class="form-group">
											 <input type = 'float' name = 'cu' step =0.01 placeholder="Copper" required class="form-control">
											
										</div>
                                    </td>

									<td>
                                    	<div class="form-group">
											 <input type = 'float' name = 'mn' step =0.01 placeholder="Manganese" required class="form-control">
											
										</div>
                                    </td>

									<td>
                                    	<div class="form-group">
											 <input type = 'float' name = 'b' step =0.01 placeholder="Boron" required class="form-control">
											
										</div>
                                    </td>
                                </tr>
                            </tbody>
							
					
						</table>
						<span class="pull-right">
							<button type="submit" value="Recommend" name="Crop_Predict" class="btn btn-warning btn-submit">SUBMIT</button>
						</span>	
					</form>
</div>
</div>

<div class="card text-white bg-gradient-success mb-3">
				  <div class="card-header bg-dark">
				  <span class=" text-success display-4 text-white" >Result</span>					
				  </div>

					<h4>
					<?php 
					$url = 'http://127.0.0.1:5000/predict';
							$data = array(
							'N' => $_POST['n'],
							'P' => $_POST['p'],
							'K' => $_POST['k'],
							'pH' => $_POST['ph'],
							'EC' => $_POST['ec'],
							'OC' => $_POST['oc'],
							'S' => $_POST['s'],
							'Zn' => $_POST['zn'],
							'Fe' => $_POST['fe'],
							'Cu' => $_POST['cu'],
							'Mn' => $_POST['mn'],
							'B' => $_POST['b']);
					
						// $n=trim($_POST['n']);
					// $p=trim($_POST['p']);
					// $k=trim($_POST['k']);
					// $ph=trim($_POST['ph']);
					// $ec=trim($_POST['ec']);
					// $oc=trim($_POST['oc']);
					// $s=trim($_POST['s']);
					// $zn=trim($_POST['zn']);
					// $fe =trim($_POST['fe']);
					// $cu =trim($_POST['cu']);
					// $mn =trim($_POST['mn']);
					// $b=trim($_POST['b']);

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


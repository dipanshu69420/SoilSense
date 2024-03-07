<!DOCTYPE html>
<html>
<?
error_reporting(0);
ini_set('display_errors', 0);

?>
<?php include ('header.php'); 
 ?>

  <body class="bg-white" id="top">
  
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
            <div class="col-md-12 mb-3">

				<div class="card text-white mb-3">
				<form role="form" action="#" method="post" >  
				  <div class="card-header bg-dark" >
				  <span class=" text-info display-4 text-white"  > Fertilizer Recommendation  </span>	
						<span class="pull-right">
							<button type="submit" value="Recommend" name="Fert_Recommend" class="btn btn-warning btn-submit">SUBMIT</button>
						</span>		
				  
				  </div>

				  <div class="card-body text-dark">
				     <form role="form" action="l" method="post" >     
					 
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
											<input type = 'number' name = 'n' placeholder="Nitrogen Eg:37" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'p' placeholder="Phosphorus Eg:0" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'k' placeholder="Potassium Eg:0" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 't'  placeholder="Temperature Eg:26" required class="form-control">
											
										</div>
                                    </td>
</table>
				     <form role="form" action="#" method="post" >     
					 
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
					<th class="text-black bg-gradient-success"><center>Humidity</center></th></span>
					<th class="text-black bg-gradient-success"><center>Soil Moisture</center></th>
					<th class="text-black bg-gradient-success"><center>Soil Type</center></th>
					<th class="text-black bg-gradient-success"><center>Crop</center></th>

					
        </tr>
    </thead>		
					<tr>
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'h'  placeholder="Humidity Eg:52" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name='soilMoisture' placeholder="Moisture Eg:38" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
										<div class="form-group ">
													<select name="soil" class="form-control">
													<option  value="">Select Soil Type</option>
													<option  value="4">Sandy</option>
													<option  value="2">Loamy</option>
													<option  value="0">Black</option>
													<option  value="3">Red</option>
													<option  value="1">Clayey</option>											
													</select>
										</div>
									</td>
									
									<td>
										<div class="form-group ">
									<select name="crop" class="form-control">
													<option  value="">Select Crop</option>
													<option  value="3">Maize</option>
													<option  value="8">Sugarcane</option>
													<option  value="1">Cotton</option>
													<option  value="9">Tobacco</option>
													<option  value="6">Paddy</option>	
													<option  value="0">Barley</option>	
													<option  value="10">Wheat</option>	
													<option  value="4">Millets</option>	
													<option  value="5">Oil seeds</option>	
													<option  value="7">Pulses</option>	
													<option  value="2">Ground Nuts</option>													
													</select>
										</div>

									</td>
                                </tr>
                            </tbody>
							
					
	</table>
	</div>
	</form>

</div>


<div class="card text-black bg-white mb-3">
				  <div class="card-header bg-dark">
				  <span class=" text-success display-4 text-white pd-lf"  > Result  </span>					
				  </div>

					<h4 class="" style="padding: 10px;">
					<?php 
					$url = 'http://127.0.0.1:5000/predictferti';
							$data = array(
							
							'Temperature' => $_POST['t'],
							'Humidity' => $_POST['h'],
							'Moisture' => $_POST['soilMoisture'],
							'Soil Type' => $_POST['soil'],
							'Crop Type' => $_POST['crop'],
							'Nitrogen' => $_POST['n'],
							'Potassium' => $_POST['k'],
							'Phosphorous' => $_POST['p']);
					

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

						
							echo " For Values of Nitrogen: ".$_POST['n']. " , Potassium:".$_POST['k']. " , Phophorous:".$_POST['p'] ;

							echo"<br>";

    						echo "Fertilizer Present(Prediction): " . $response['output'];
							echo"<br>";
							if ($response['output'] == 'DAP') 
							{
							echo "<p>There is possibility deficit of Potassium, Sulphur and Micronutrients such as Fe, Mn, Zn, Cu, B</p>
							<p>Potassium deficiency : Use fertilizers with a high potassium content. You can use 17-17-17, 10-26-26, or 14-35-35 fertilizers, as they all contain significant levels of potassium.
							</p>
							<p>Sulfur (S) deficiency: If you need to address sulfur deficiency, you can use fertilizers that contain sulfur. Urea does not contain sulfur, so it won't address this deficiency. However, ammonium sulfate (21-0-0-24S) or potassium sulfate (0-0-50-18S) would be suitable options.</p>
							<p>Micronutrient deficiency: For micronutrient deficiencies, consider using micronutrient fertilizers or soil amendments that contain iron, manganese, zinc, copper, boron, and molybdenum.</p>";
							echo"<br>";}

							elseif($response['output']=='17-17-17'){
								echo"<p>There is possibility deficit of Sulphur and Micronutrients such as Fe, Mn, Zn, Cu, B</p>
								<p>Sulfur (S) deficiency: You can use ammonium sulfate (21-0-0-24S) to supply sulfur.
								</p><p>Micronutrient deficiency: Use micronutrient fertilizers or soil amendments containing iron, manganese, zinc, copper, boron, and molybdenum. These can be applied as foliar sprays or incorporated into the soil.
								</p> 
								";
								echo"<br>";
							}

							elseif($response['output']=='Urea'){
								echo"<p>There is possibility deficit of Phosphorus, Potassium, Sulphur and Micronutrients such as Fe, Mn, Zn, Cu, B								</p><p>NPK 15-15-15 Fertilizer: Balanced fertilizer with nitrogen, phosphorus, and potassium for comprehensive nutrient supply.
								</p><p>Phosphorus (P) deficiency: Use DAP (Diammonium phosphate), which is a phosphorus-based fertilizer, to address phosphorus deficiencies.
								</p><p>Potassium (K) deficiency: Use fertilizers with a high potassium content, such as 17-17-17 or 14-35-35, to address potassium deficiencies.
								</p><p>Sulfur (S) deficiency: Use fertilizers containing sulfur, such as ammonium sulfate (21-0-0-24S), to address sulfur deficiencies.
								</p><p>Micronutrient deficiency: Use micronutrient fertilizers or soil amendments containing iron, manganese, zinc, copper, boron, and molybdenum. These can be applied as foliar sprays or incorporated into the soil.
								</p>";
								echo"<br>";
							}

							elseif($response['output']=='20-20'){
								echo"<p>There is possibility deficit of Potassium, Sulphur and Micronutrients such as Fe, Mn, Zn, Cu, B</p>
								<p>Potassium (K) deficiency: Use fertilizers with a high potassium content, such as 17-17-17, 10-26-26, or 14-35-35.
								</p>
								<p>Sulfur (S) deficiency: Use fertilizers containing sulfur, such as ammonium sulfate (21-0-0-24S) or potassium sulfate (0-0-50-18S).
								</p><p>Micronutrient deficiency: Use micronutrient fertilizers or soil amendments containing iron, manganese, zinc, copper, boron, and molybdenum. These can be applied as foliar sprays or incorporated into the soil.
								</p>";
								echo"<br>";
							}

							elseif($response['output']=='10-26-26'){
								echo"<p>There is possibility deficit of Nitrogen, Sulphur and Micronutrients such as Fe, Mn, Zn, Cu, B</p>
								<p>Nitrogen (N) deficiency: Use urea, which primarily supplies nitrogen, to address nitrogen deficiencies.
								</p><p>Sulfur (S) deficiency: Use fertilizers containing sulfur, such as ammonium sulfate (21-0-0-24S) or potassium sulfate (0-0-50-18S).
								</p><p>Micronutrient deficiency: Use micronutrient fertilizers or soil amendments containing iron, manganese, zinc, copper, boron, and molybdenum. These can be applied as foliar sprays or incorporated into the soil.
								</p>";
								echo"<br>";
							}
							
							elseif($response['output']=='28-28'){
								echo"<p>There is possibility deficit of Potassium, Sulphur and Micronutrients such as Fe, Mn, Zn, Cu, B</p>
								<p>Potassium (K) deficiency: Use fertilizers with a high potassium content, such as 17-17-17, 10-26-26, or 14-35-35.
								</p><p>Sulfur (S) deficiency: Use fertilizers containing sulfur, such as ammonium sulfate (21-0-0-24S) or potassium sulfate (0-0-50-18S).
								</p><p>Micronutrient deficiency: Use micronutrient fertilizers or soil amendments containing iron, manganese, zinc, copper, boron, and molybdenum. These can be applied as foliar sprays or incorporated into the soil.
								</p>";
								echo"<br>";
							}

							elseif($response['output']=='14-35-14'){
								echo"<p>There is possibility deficit of Nitrogen, Sulphur and Micronutrients such as Fe, Mn, Zn, Cu, B</p>
								<p>Nitrogen (N) deficiency: Use urea, which primarily supplies nitrogen, to address nitrogen deficiencies.
								</p><p>Sulfur (S) deficiency: Use fertilizers containing sulfur, such as ammonium sulfate (21-0-0-24S) or potassium sulfate (0-0-50-18S).
								</p><p>Micronutrient deficiency: Use micronutrient fertilizers or soil amendments containing iron, manganese, zinc, copper, boron, and molybdenum. These can be applied as foliar sprays or incorporated into the soil.
								</p>
								";
								echo"<br>";
							}

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


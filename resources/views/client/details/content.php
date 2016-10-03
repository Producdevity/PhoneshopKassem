

 <?php
    $sql_select_devices = "SELECT * FROM devices WHERE id=".$device_id; 
    $result_devices = mysqli_query($conn, $sql_select_devices);
    $device = mysqli_fetch_array($result_devices);

    $sql_select_brands = "SELECT * FROM brands WHERE id=".$device['brand_id']; 
    $result_brands = mysqli_query($conn, $sql_select_brands);
    $brand = mysqli_fetch_array($result_brands);

    $sql_select_series = "SELECT * FROM series WHERE id=".$device['series_id']; 
    $result_series = mysqli_query($conn, $sql_select_series);
    $serie = mysqli_fetch_array($result_series);

    $serieName = ucfirst($serie['name']);    
    $brandName = ucfirst($brand['name']);
    $deviceName = ucfirst($device['name']);

    $fullName = $brandName." ".$serieName." ".$deviceName;

    if($device['type_id'] == 1){
        $type = "Telefoon";
        $urlType = 'mobile';
    } else if($device['type_id'] == 2){
        $type = "Tablet";
        $urlType = 'tablet';
    }

?>

<div class="container">
	<div class="check">	 
			 <h1>Reparaties <?php echo $fullName; ?></h1>
		 <div class="col-md-9 cart-items">
			
			<?php
                                    
            $sql_select_pair = "SELECT * FROM repair_device WHERE device_id=".$device_id; 
            $result_pair = mysqli_query($conn, $sql_select_pair);
            $num_rowsP = mysqli_num_rows($result_pair);

            if ($num_rowsP == 0){
                echo'<p>Voor dit toestel zijn er op het moment geen reparaties beschikbaar op de website, de kans is heel groot dat ons team nog steeds in staat is u de reparatie te leveren. Voor extra informatie kunt u ons bellen</p>';
            }else {

                while ($pair = mysqli_fetch_array($result_pair)) {
                    $sql_select_devices = "SELECT * FROM devices WHERE id=".$pair['device_id']; 
                    $result_devices = mysqli_query($conn, $sql_select_devices);
                    $device = mysqli_fetch_array($result_devices);

                    $sql_select_brands = "SELECT * FROM brands WHERE id=".$device['brand_id']; 
                    $result_brands = mysqli_query($conn, $sql_select_brands);
                    $brand = mysqli_fetch_array($result_brands);

                    $sql_select_series = "SELECT * FROM series WHERE id=".$device['series_id']; 
                    $result_series = mysqli_query($conn, $sql_select_series);
                    $serie = mysqli_fetch_array($result_series);

                    $sql_select_repairs = "SELECT * FROM repairs WHERE id=".$pair['repair_id']; 
                    $result_repairs = mysqli_query($conn, $sql_select_repairs);
                    $repair = mysqli_fetch_array($result_repairs);

                    $repairName = ucfirst($repair['name']);
                    $pairPrice = "€".$pair['price'];

                    $serieName = ucfirst($serie['name']);    
                    $brandName = ucfirst($brand['name']);
                    $deviceName = ucfirst($device['name']);

                    $fullName = $brandName." ".$serieName." ".$deviceName;

                    echo '
                <div class="cart-header">
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/repair/' . $repair['icon'] . '" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">'.$repairName.'</a><span>Model: '. $serieName . ' '.$deviceName.'</span></h3>
						
							 <div class="delivery">
							 <h2 style="float: right;">'.$pairPrice.'</h2>
							 
							 <div class="clearfix"></div>
				        </div>	
					   </div>
                     <div class="clearfix"></div>						
				  </div>
			 </div>';
                }
            }
        ?>
			
			
	
		
			 
 <!-- test item
			 <div class="cart-header2">
				 <div class="close2"> </div>
				  <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/pic2.jpg" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">Mountain Hopper(XS R034)</a><span>Model No: 3578</span></h3>
						<ul class="qty">
							<li><p>Size : 5</p></li>
							<li><p>Qty : 1</p></li>
						</ul>
							 <div class="delivery">
							 <p>Service Charges : Rs.100.00</p>
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>	
				  </div>
			  </div>	
-->	  
			  
			  		
		 </div>
		 
		 
		  <div class="col-md-3 cart-total">
			 <a class="continue" href="?url=<?php echo $urlType; ?>Brands">Bekijk andere toestellen</a>
			 <div class="price-details">
			 <h3>Toestel:</h3>
				 <h3><?php echo $fullName; ?></h3>
				
				 <div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			 </ul>
			
			 
			 <div class="clearfix"></div>
			 <a class="order" href="mailto:info@phoneshopkassem.nl">Mail ons voor vragen</a>
		
				 <p>Staat uw reparatie er niet bij, dan regelen wij dat telefonisch met u</p><br />
			 </div>
			</div>
		
			<div class="clearfix"> </div>
	 </div>
	 </div>


<!--//content-->
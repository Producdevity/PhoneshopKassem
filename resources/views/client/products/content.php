<?php
    if($type_id == 1){
        $type = "Telefoon";
    } else if($type_id == 2){
        $type = "Tablet";
    }
?>

<!--content-->
<!---->
<div class="product">
    <div class="container">
        <div class="col-md-3 col-sm-12 product-price">
        <?php 
            require 'views/products/sidebar_menu.php';
        ?>
            
        </div>
        
        <div class="col-md-9 col-sm-12 product1">
            <div class="bottom-product">
        
                
               <?php
                           
                    $sql_select_devices = "SELECT * FROM devices WHERE type_id=".$type_id." AND brand_id=".$brand_id." ORDER BY name"; 
                    $result_devices = mysqli_query($conn, $sql_select_devices);

                    while ($device = mysqli_fetch_array($result_devices)) {
                        $sql_select_series = "SELECT * FROM series WHERE id=".$device['series_id']." ORDER BY name"; 
                        $result_series = mysqli_query($conn, $sql_select_series);
                        $serie = mysqli_fetch_array($result_series);
                        
                        $sql_select_brands = "SELECT * FROM brands WHERE id=".$serie['brand_id'].""; 
                        $result_brands = mysqli_query($conn, $sql_select_brands);
                        $brand = mysqli_fetch_array($result_brands);

                        $brandName = ucfirst($brand['name']);
                        $serieName = ucfirst($serie['name']);
                        $deviceName = ucfirst($device['name']);

                        $fullName = " ".$serieName." ".$deviceName;
                        
                        if(empty($device['img'])){
                            $device['img'] = 'device_icon.jpg';
                        }
                 
                        
                        echo '
                <div class="col-lg-4 col-md-6 col-sm-6 bottom-cd simpleCart_shelfItem">
                    <div class="product-at ">
                        <a href="?url=details&device_id='.$device['id'].'"><img class="img-responsive productImage" src="images/devices/'.$device['img'].'" alt="">
                            <div class="pro-grid">
                                <span class="buy-in">Bekijk Reparaties</span>
                            </div>
                        </a>
                    </div>
                    <p class="tun">'.$deviceName.'</p>
                    <a href="?url=details&device_id='.$device['id'].'" class="item_add">
                        <p class="number item_price">'.$brandName.'</p>
                    </a>
                </div>';
                    }

              ?>
            </div>                
   


        </div>
        <div class="clearfix"> </div>
        <!-- 
        <nav class="in">
            <ul class="pagination">
                <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                <li><a href="#">2 <span class="sr-only"></span></a></li>
                <li><a href="#">3 <span class="sr-only"></span></a></li>
                <li><a href="#">4 <span class="sr-only"></span></a></li>
                <li><a href="#">5 <span class="sr-only"></span></a></li>
                <li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
            </ul>
        </nav>
        -->
    </div>

</div>

<!---->

<!--//content-->
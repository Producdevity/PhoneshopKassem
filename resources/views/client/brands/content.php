<?php
    if($type_id == 1){
        $type = "Telefoon";
        $urlType = 'mobile';
    } else if($type_id == 2){
        $type = "Tablet";
        $urlType = 'tablet';
    }
?>

<!--content-->
<!---->
<div class="product">
    <div class="container">
        <div class="col-md-3 product-price">
        <?php 
            require 'views/products/sidebar_menu.php';
        ?>
            
        </div>
        
        <div class="col-md-9 product1">
            <div class=" bottom-product">
        
                
               <?php
                
                    $sql_select_brands = "SELECT * FROM brands  ORDER BY name"; 
                    $result_brands = mysqli_query($conn, $sql_select_brands);

                    while ($brand = mysqli_fetch_array($result_brands)) {
                        $sql_select_devices = "SELECT * FROM devices WHERE type_id=".$type_id." AND brand_id=".$brand['id'];
                        $resultCheck = mysqli_query($conn, $sql_select_devices);
                        $num_rowsU = mysqli_num_rows($resultCheck);
                        $brandName = ucfirst($brand['name']);

                        if ($num_rowsU != 0) {

                            echo '
                        <div class="col-sm-4 bottom-cd simpleCart_shelfItem">
                            <div class="product-at ">
                                <a href="?url='.$urlType.'&brand_id='.$brand['id'].'"><img class="img-responsive productImage" src="images/logos/'.$brand['img'].'" alt="">
                                    
                                </a>
                            </div>
                            <p class="tun"></p>
                            <a href="?url='.$urlType.'&brand_id='.$brand['id'].'" class="item_add">
                                <p class="number item_price">'.$brandName.'</p>
                            </a>
                        </div>';
                        }

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
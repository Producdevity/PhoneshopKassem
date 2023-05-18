
    
   <div class=" rsidebar span_1_of_left">
                <div class="of-left">
                    <h3 class="cate">Categorien <?php echo $type; ?></h3>
                </div>
                <ul class="menu">
                <?php 
            $sql_select_brands = "SELECT * FROM brands  ORDER BY name"; 
            $result_brands = mysqli_query($conn, $sql_select_brands);
            $x = 1;
            while ($brand = mysqli_fetch_array($result_brands)) {
                $brandName = ucfirst($brand['name']);
                
                $sql_select_devices = "SELECT * FROM devices WHERE type_id=".$type_id." AND brand_id=".$brand['id'];
                $resultCheck = mysqli_query($conn, $sql_select_devices);
                $num_rowsU = mysqli_num_rows($resultCheck);

                    if ($num_rowsU != 0) {

                        echo '		
                         <li class="item'.$x.'"><a href="#">' . $brandName . ' </a>
                             <ul class="cute">';


                            $sql_select_devices = "SELECT * FROM devices WHERE type_id=".$type_id." AND brand_id=".$brand['id']; 
                            $result_devices = mysqli_query($conn, $sql_select_devices);
                            $i = 1;

                            while ($device = mysqli_fetch_array($result_devices)) {

                                $sql_select_series = "SELECT * FROM series WHERE id=".$device['series_id']; 
                                $result_series = mysqli_query($conn, $sql_select_series);
                                $serie = mysqli_fetch_array($result_series);

                                $serieName = ucfirst($serie['name']); 
                                $deviceName = ucfirst($device['name']);

                                $fullName = $serieName." ".$deviceName;

                                echo '<li class="subitem"><a href="?url=details&device_id='.$device['id'].'">' . $fullName . '</a></li>';
                                $i++;
                            }

                        echo '</ul></li>';
                        $x++;
                    }
                }
    ?>
                
                </ul>
            </div>
            <!--initiate accordion-->
            <script type="text/javascript">
                $(function () {
                    var menu_ul = $('.menu > li > ul')
                        , menu_a = $('.menu > li > a');
                    menu_ul.hide();
                    menu_a.click(function (e) {
                        e.preventDefault();
                        if (!$(this).hasClass('active')) {
                            menu_a.removeClass('active');
                            menu_ul.filter(':visible').slideUp('normal');
                            $(this).addClass('active').next().stop(true, true).slideDown('normal');
                        } else {
                            $(this).removeClass('active');
                            $(this).next().stop(true, true).slideUp('normal');
                        }
                    });

                });
            </script>
            <!---->
            <div class="product-middle">

                <div class="fit-top">
                    <h6 class="shop-top">Afspraak maken?</h6>
                    <a href="#" class="shop-now">BEL NU</a>
                    <div class="clearfix"> </div>
                </div>
            </div>
<br />
            <!--
            <div class="product-bottom">
                <div class="of-left-in">
                    <h3 class="best">Meest verkocht</h3>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="#"><img class="img-responsive " src="images/repair/batterij1.png" alt=""></a>

                    </div>
                    <div class=" fashion-grid1">
                        <h6 class="best2"><a href="" >Samsung Galaxy S4 batterij reparatie</a></h6>

                        <span class=" price-in1"> €29.95</span>
                    </div>

                    <div class="clearfix"> </div>
                </div>
                <div class="product-go">
                    <div class=" fashion-grid">
                        <a href="single.html"><img class="img-responsive " src="images/repair/aan-uit.png" alt=""></a>

                    </div>
                    <div class="fashion-grid1">
                        <h6 class="best2"><a href="#" >iPhone 5 Home knop reparatie </a></h6>

                        <span class=" price-in1"> €89,95</span>
                    </div>

                    <div class="clearfix"> </div>
                </div>

            </div>
            -->
            
            <div class=" per1">
                <a href="#"><img class="img-responsive" src="images/pro.jpg" alt="">
                    <div class="six1">
                        <h4>REPARATIE</h4>
                        <span>30</span>
                        <p>MINUTEN</p>
                    </div>
                </a>
            </div>
            
@extends('layouts.client')

@section('content')
<div class="banner">
    <div class="container">
        <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
        <script>
					$(document).ready(function() {
            $(function() {
              $("#slider").responsiveSlides({
                  auto: true,
                  nav: true,
                  speed: 500,
                  namespace: "callbacks",
                  pager: true,
                });
						});
					});
        </script>
        <div id="top" class="callbacks_container">
          <ul class="rslides" id="slider">
            <li>
              <div class="banner-text">
                <h3>PHONESHOP KASSEM GEEFT UW TOESTEL EEN NIEUW LEVEN!</h3>
                <p>Reparateurs van Phoneshop Kassem zijn professioneel getraind en worden continue gemotiveerd om de hoogst haalbare service te leveren aan u, de klant. Wij hebben en zullen altijd één doel hebben: focus op de klant en niet de euro.
                </p>
              </div>
            </li>
            <li>
              <div class="banner-text">
                <h3>Toestel kapot?</h3>
                <p>Phoneshop Kassem is inmiddels een opluchting geweest voor ontelbare klanten die bezorgd waren dat er geen terugweg meer mogelijk was van de schade die zij hun dure apparaten hadden toegebracht. </p>
              </div>
            </li>
            <li>
              <div class="banner-text">
                <h3>Smartphone reparatie tegen scherpe tarieven.</h3>
                <p>90% van de reparaties is binnen 30 minuten weer klaar voor gebruik en ONDERZOEK IS ALTIJD GRATIS. </p>
              </div>
            </li>
          </ul>
        </div>
    </div>
</div><!-- /.banner -->

<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>KIES UW TYPE TOESTEL</h1>
			<div class="grid-in">
				<div class="col-md-6 men">
					<a href="?url=mobile" class="b-link-stripe hvr-grow thickbox"><img class="img-responsive" src="{{ asset('images/banner_phoneT.png') }}" alt="">
						<div class="b-wrapper">
							<h3 class="hvr-grow">
				        <span>Telefoon</span>
			        </h3>
						</div>
					</a>
				</div>
				<div class="col-md-6 men">
					<a href="?url=tablet" class="b-link-stripe hvr-grow thickbox"><img class="img-responsive" src="{{ asset('images/banner_tabletT.png') }}" alt="">
						<div class="b-wrapper">
							<h3 class="hvr-grow">
				        <span>Tablet</span>
			        </h3>
						</div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div> <!-- /.grid-in -->
		</div> <!-- /.content-top -->
		<div class="content-top-bottom">
			<h2>Wij hebben en zullen altijd één doel hebben: <br />focus op de klant en niet de euro.</h2>
			<div class="clearfix"> </div>
		</div>
	</div><!-- /.container -->

	<!-- IMAGES BRANDS LOGOS -->
	<div class="content-bottom">
		<ul>
			<li>
				<a href="#"><img class="img-responsive" src="{{ asset('images/logos/samsung_logo.png') }}" alt=""></a>
			</li>
			<li>
				<a href="#"><img class="img-responsive" src="{{ asset('images/logos/apple_logo.png') }}" alt=""></a>
			</li>
			<li>
				<a href="#"><img class="img-responsive" src="{{ asset('images/logos/sony_logo.png') }}" alt=""></a>
			</li>
			<li>
				<a href="#"><img class="img-responsive" src="{{ asset('images/logos/lg_logo.png') }}" alt=""></a>
			</li>
			<li>
				<a href="#"><img class="img-responsive" src="{{ asset('images/logos/htc_logo.png') }}" alt=""></a>
			</li>
			<li>
				<a href="#"><img class="img-responsive" src="{{ asset('images/logos/huawei_logo.png') }}" alt=""></a>
			</li>
			<div class="clearfix"> </div>
		</ul>
	</div>
</div>
@endsection

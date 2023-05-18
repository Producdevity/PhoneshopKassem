@extends('layouts.client')
@section('content')
<!--contact content-->
<div class="blog">
	<div class="container">
		<div class="blog-top">
			<div class="grid_3 grid-1">
				<h3><a href="#">contact</a></h3>
				<a href=""><img src="{{ asset('images/contact_b1.png') }}" class="img-responsive" alt="" /></a><br />

				<h3><a href="?url=info">Contact:</a></h3>
				<p>Phoneshop Kassem is te bereiken via de onderstaande gegevens: <br /> Email:
					<?php echo "mail"; ?><br /> Tel nr:
					<?php echo "telNr"; ?><br />
					<br />
					<a href="mailto:<?php echo "mail"; ?>">Klik hier om direct een mail te versturen</a><br />

				</p><br /><br />

				<h3><a href="?url=info">INFORMATIE:</a></h3>
				<p>Phoneshop Kassem is een reparatieservice van smartphones en tablets. Wat ons kenmerkt is dat wij de markt voortdurend in de gaten houden om de prijzen zo laag mogelijk te houden. Hierbij nemen wij als regel aan dat er nooit ingeleverd mag worden op
					kwaliteit. Zo bent u verzekerd van de beste prijs-kwaliteit verhouding. Wij hebben en zullen altijd &#233;&#233;n doel hebben: focus op de klant en niet de euro! <br /> <a href="?url=info">Lees verder op onze informatie pagina</a></p><br /><br />


				<h3>Ophaalservice:</h3>
				<p>Is bezoeken niet mogelijk? Geen probleem! U kunt er voor kiezen om uw apparaat op te laten halen tegen een meerprijs van tien euro (alleen mogelijk binnen Alphen aan den Rijn). Wij komen uw apparaat op locatie ophalen en terugbrengen. Hierdoor bent
					u gegarandeerd van de beste en snelste reparatieservice. </p><br /><br />


				<h3>Openingstijden:</h3>
				<p>Wij zijn telefonisch bereikbaar op onderstaande tijden:</p><br />
				<p>Maandag 12:00 - 21:00</p>
				<p>Dinsdag 10:00 - 21:00</p>
				<p>Woensdag 10:00 - 21:00</p>
				<p>Donderdag 10:00 - 21:00</p>
				<p>Vrijdag 10:00 - 21:00</p>
				<p>Zaterdag 12:00 - 18:00</p>

			</div><!-- /.grid_3 grid-1 -->
		</div><!-- /.blog-top -->
	</div><!-- /.container -->
</div><!--/.blog-->
@endsection

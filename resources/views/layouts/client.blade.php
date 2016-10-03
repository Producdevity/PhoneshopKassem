<!--
author: Yassine Gherbi
author URL: https://yassinegherbi.nl
-->
<!DOCTYPE html>
<html>
<head>
    <title>Phoneshop Kassem - {{ $page_title or " " }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="telefoon reparatie alphen, reparatie goedkoop, reparatie alphen aan den rijn, telefoonshop kassem, reparatiewinkel kassem, phoneshop, kassem, reparatie, tablet, telefoon, Alphen aan den Rijn, Phoneshopkassem, phone and tablet repair"
    />
    {{-- Bootstrap CSS Style --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" media="all" />
    <!--theme-style-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/memenu.css') }}" type="text/css" media="all" />

    {{-- Bower components --}}
    <link rel="stylesheet" href="{{ asset('bower_components/hover/css/hover.css') }}" type="text/css" media="all" />

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- for bootstrap working -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    {{-- simpleCart min js --}}
    <script src="{{ asset('js/simpleCart.min.js') }}"></script>
    {{-- memenu js --}}
    <script src="{{ asset('js/memenu.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".memenu").memenu();
        });
    </script>
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--fonts-->
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<!--navigation-->
	@include('client/components/header')
<!--navigation-->

<!--content-->
  @yield('content')
<!--content-->

<!-- footer -->
	@include('client/components/footer')
<!-- //footer -->

</body>
</html>

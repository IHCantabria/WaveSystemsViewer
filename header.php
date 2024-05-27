<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<!-- https://github.com/michalsnik/aos -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<!-- Custom CSS -->
	<link rel="stylesheet" href="./main.css" type="text/css">

	<!-- {% if title %}
		<title>CodeWithPrince-{{title}}</title>
	{% else %}
		<title>CodeWithPrince</title>
	{% endif %} -->

</head>
<body class = "day-night" id = "day-night">

    <div class="row">
        <!-- NAVIGATION BAR -->
        <div class=" menu-container">
            <div class="menu">
                <a href="https://ihcantabria.com/" class="logo"><img src="https://ihcantabria.com/wp-content/uploads/2019/02/Logo-IHCantabria-Universidad-Cantabria-whitev2-copia-2.png" width="140" height="auto" alt="IHCantabria" id="logo"></a>
            <ul class="clearfix">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a>
                <ul>
                    <li><a href="#">JONSWAP</a>
                    <ul>
                        <li><a href="#">Best γ fitting method</a></li>
                        <li><a href="#">JONSWAP spectrum climate variability</a></li>
                    </ul>
                    </li>
                    <li><a href="#">Directional wave spectrum</a>
                    <ul>
                        <li><a href="#">Introduction</a></li>
                        <li><a href="#">Wave Partitions</a></li>
                        <li><a href="#">Wave Systems</a></li>
                    </ul>
                    </li>
                    <li><a href="#">Research</a>
                    <ul>
                        <li><a href="#">Related Papers</a></li>
                    </ul>
                    </li>
                </ul>
                </li>
                <li><a href="#">Dashboards/Viewers</a>
                <ul>
                    <li><a href="#">Wave Partitions</a></li>
                    <li><a href="Swell_wave_systems_dashboard.html">Swell Wave Systems</a></li>
                    <li><a href="#">Wave Systems</a></li>
                </ul>
                </li>
                <li><a href="#">Contact us</a></li>
            </ul>
            </div>
        </div>
        <!-- END OF THE NAVIGATION BAR -->
    </div>

</body>
<!-- LOADING THE NAV BAR NEED THE QUERY OF JS -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="text/javascript" src="./js/navbar-js.js"></script>
</html>
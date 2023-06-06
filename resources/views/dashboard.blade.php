<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SGI</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<style>
	body {
			background: #F4F7FD;
			margin-top: 20px;
	}

	.card-margin {
			margin-bottom: 1.875rem;
	}

	.card {
			border: 0;
			box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
			-webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
			-moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
			-ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
	}

	.card {
			position: relative;
			display: flex;
			flex-direction: column;
			min-width: 0;
			word-wrap: break-word;
			background-color: #ffffff;
			background-clip: border-box;
			border: 1px solid #e6e4e9;
			border-radius: 8px;
	}

	.card .card-header.no-border {
			border: 0;
	}

	.card .card-header {
			background: none;
			padding: 0 0.9375rem;
			font-weight: 500;
			display: flex;
			align-items: center;
			min-height: 50px;
	}

	.card-header:first-child {
			border-radius: calc(8px - 1px) calc(8px - 1px) 0 0;
	}

	.widget-49 .widget-49-title-wrapper {
			display: flex;
			align-items: center;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-primary {
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			background-color: #edf1fc;
			width: 4rem;
			height: 4rem;
			border-radius: 50%;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-day {
			color: #4e73e5;
			font-weight: 500;
			font-size: 1.5rem;
			line-height: 1;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-primary .widget-49-date-month {
			color: #4e73e5;
			line-height: 1;
			font-size: 1rem;
			text-transform: uppercase;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-secondary {
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			background-color: #fcfcfd;
			width: 4rem;
			height: 4rem;
			border-radius: 50%;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-day {
			color: #dde1e9;
			font-weight: 500;
			font-size: 1.5rem;
			line-height: 1;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-secondary .widget-49-date-month {
			color: #dde1e9;
			line-height: 1;
			font-size: 1rem;
			text-transform: uppercase;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-success {
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			background-color: #e8faf8;
			width: 4rem;
			height: 4rem;
			border-radius: 50%;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-day {
			color: #17d1bd;
			font-weight: 500;
			font-size: 1.5rem;
			line-height: 1;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-success .widget-49-date-month {
			color: #17d1bd;
			line-height: 1;
			font-size: 1rem;
			text-transform: uppercase;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-info {
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			background-color: #ebf7ff;
			width: 4rem;
			height: 4rem;
			border-radius: 50%;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-day {
			color: #36afff;
			font-weight: 500;
			font-size: 1.5rem;
			line-height: 1;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-info .widget-49-date-month {
			color: #36afff;
			line-height: 1;
			font-size: 1rem;
			text-transform: uppercase;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-warning {
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			background-color: floralwhite;
			width: 4rem;
			height: 4rem;
			border-radius: 50%;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-day {
			color: #FFC868;
			font-weight: 500;
			font-size: 1.5rem;
			line-height: 1;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-warning .widget-49-date-month {
			color: #FFC868;
			line-height: 1;
			font-size: 1rem;
			text-transform: uppercase;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-danger {
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			background-color: #feeeef;
			width: 4rem;
			height: 4rem;
			border-radius: 50%;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-day {
			color: #F95062;
			font-weight: 500;
			font-size: 1.5rem;
			line-height: 1;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-danger .widget-49-date-month {
			color: #F95062;
			line-height: 1;
			font-size: 1rem;
			text-transform: uppercase;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-light {
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			background-color: #fefeff;
			width: 4rem;
			height: 4rem;
			border-radius: 50%;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-day {
			color: #f7f9fa;
			font-weight: 500;
			font-size: 1.5rem;
			line-height: 1;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-light .widget-49-date-month {
			color: #f7f9fa;
			line-height: 1;
			font-size: 1rem;
			text-transform: uppercase;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-dark {
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			background-color: #ebedee;
			width: 4rem;
			height: 4rem;
			border-radius: 50%;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-day {
			color: #394856;
			font-weight: 500;
			font-size: 1.5rem;
			line-height: 1;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-dark .widget-49-date-month {
			color: #394856;
			line-height: 1;
			font-size: 1rem;
			text-transform: uppercase;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-base {
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			background-color: #f0fafb;
			width: 4rem;
			height: 4rem;
			border-radius: 50%;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-day {
			color: #68CBD7;
			font-weight: 500;
			font-size: 1.5rem;
			line-height: 1;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-date-base .widget-49-date-month {
			color: #68CBD7;
			line-height: 1;
			font-size: 1rem;
			text-transform: uppercase;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-meeting-info {
			display: flex;
			flex-direction: column;
			margin-left: 1rem;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-pro-title {
			color: #3c4142;
			font-size: 14px;
	}

	.widget-49 .widget-49-title-wrapper .widget-49-meeting-info .widget-49-meeting-time {
			color: #B1BAC5;
			font-size: 13px;
	}

	.widget-49 .widget-49-meeting-points {
			font-weight: 400;
			font-size: 13px;
			margin-top: .5rem;
	}

	.widget-49 .widget-49-meeting-points .widget-49-meeting-item {
			display: list-item;
			color: #727686;
	}

	.widget-49 .widget-49-meeting-points .widget-49-meeting-item span {
			margin-left: .5rem;
	}

	.widget-49 .widget-49-meeting-action {
			text-align: right;
	}

	.widget-49 .widget-49-meeting-action a {
			text-transform: uppercase;
	}
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous">

@vite('recursos/js/app.js')
<body class="d-flex flex-column h-100">
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container-fluid">
				<a class="navbar-brand" href="#">
						<img src="{{ asset('img/lg.png') }}" style="max-width: 50%;max-height: 40px" alt="">
						Farmacia Don Evelio
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
						aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
						<ul class="navbar-nav me-auto mb-2 mb-md-0">
								<li class="nav-item">
										<a class="nav-link active" aria-current="page" href="#">Demandas y tendencias</a>
								</li>
								<li class="nav-item">
										<a class="nav-link active" aria-current="page" href="#">Proveedores</a>
								</li>
						</ul>
						<div class="d-flex">
								<ul class="navbar-nav ml-auto">
										<form action="{{ route('logout') }}" method="POST" style="display: inline;">
												@csrf
												<li><a href="#" class="nav-link" onclick="this.closest('form').submit()">Cerrar
																sesion</a></li>
										</form>
								</ul>
						</div>
				</div>
		</div>
</nav>
    <header>
        <br><br>
    </header>
    <main class=" p-5">
        <div class="container">
            <h2 class="text-center">Bienvenido usuario estrategico</h2>
						<hr>
						<h4>Reportes estrategicos disponibles</h4>
						<hr>
						<div class="row">
								<div class="col-lg-2">
								</div>
								<div class="col-lg-4">
										<div class="card card-margin">
												<div class="card-header no-border">
														<h5 class="card-title text-center">REPORTE DEMANDA Y TENDENCIAS</h5>
												</div>
												<div class="card-body pt-0">
														<div class="widget-49">
																<div class="widget-49-title-wrapper">
																		<div class="widget-49-date-dark">
																				<span class="widget-49-date-day"><i class="fas fa-chart-bar"></i></span>
																				<span class="widget-49-date-month"></span>
																		</div>
																		<div class="widget-49-meeting-info">
																				<span class="widget-49-pro-title">Reporte demandas y tendencias
																						ventas</span>
																		</div>
																</div>
																<ul class="widget-49-meeting-points">
																		<span>Aqui puedes ver un reporte completo de las demandas y tendencias de
																				ventas</span>
																</ul>
																<div class="widget-49-meeting-action">
																		<a href="#" class="btn btn-sm btn-outline-primary">VER REPORTE</a>
																</div>
														</div>
												</div>
										</div>
								</div>
								<div class="col-lg-4">
										<div class="card card-margin">
												<div class="card-header no-border">
														<h5 class="card-title text-center">REPORTE PROVEEDORES</h5>
												</div>
												<div class="card-body pt-0">
														<div class="widget-49">
																<div class="widget-49-title-wrapper">
																		<div class="widget-49-date-danger">
																				<span class="widget-49-date-day"><i class="fas fa-truck"></i></span>
																				<span class="widget-49-date-month"></span>
																		</div>
																		<div class="widget-49-meeting-info">
																				<span class="widget-49-pro-title">Compra de medicamentos</span>
																		</div>
																</div>
																<ul class="widget-49-meeting-points">
																		<span>Aqui puedes ver un reporte completo de datos relevantes de los
																				proveedores</span>
																</ul>
																<div class="widget-49-meeting-action">
																		<a href="#" class="btn btn-sm btn-outline-primary">VER REPORTE</a>
																</div>
														</div>
												</div>
										</div>
								</div>
								<div class="col-lg-2">
								</div>
						</div>
						<hr>
        </div>
        </div>
    </main>
</body>
<footer class="footer mt-auto py-3 bg-dark">
    <div class="container">
        <span class="text-muted">Sistema Informacion Gerencial 2023</span>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</html>

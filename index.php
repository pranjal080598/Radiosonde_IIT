<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Animation Link -->
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<!-- Animate.css -->
		<link rel="stylesheet" href="style.css">
		<style>
		#particles-js{
		  height: 100vh;

		  background-color: #000000;
		  background-size: cover;
		  background-position: 50% 50%;
		  background-repeat: no-repeat;
		}
		</style>
	</head>
	<body>
		<!-- <div class="row">
		<div class="col-sm-12 col-md-12"> --> 
		<!-- A grey horizontal navbar that becomes vertical on small screens -->
		<div id="particles-js">
		<nav class="navbar navbar-expand-sm fixed-top">
			<!-- Brand/logo -->
  			<div id="logo">
					<h1>Radiosonde</h1>
				</div>
			<!-- Links -->
			<!-- <div class="container"> -->
				<div id="menu">
				<!-- <div class="navbar-collapse collapse justify-content-end"> -->
					<ul class="nav">
						<!-- <li class="nav-item active"> --><a href="dashboard.html">DASHBOARD</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<!-- 	<li class="nav-item"> --><a href="analytics.html">ANALYTICS</a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<!-- <li class="nav-item"> --><a href="report.html">REPORT</a>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<!-- <li class="nav-item"> --><a href="export.html">EXPORT</a>
				</ul>
				
					</div>
					<iframe src="http://localhost:5601/app/kibana#/dashboard?embed=true&_g=(refreshInterval:(pause:!t,value:0),time:(from:now-20m,to:now))&_a=(description:'',filters:!(),fullScreenMode:!f,options:(hidePanelTitles:!f,useMargins:!t),panels:!((embeddableConfig:(),gridData:(h:15,i:'1',w:24,x:0,y:0),id:ca18c680-972b-11e9-af01-3bee3192e7df,panelIndex:'1',type:visualization,version:'7.1.1')),query:(language:kuery,query:''),timeRestore:!f,title:'New+Dashboard',viewMode:edit)" height="600" width="800"></iframe>
			</div>
		</nav>
	</div>
	</body>
	<script src="particles.js"></script>
	<script src="js/app.js"></script>
</html>

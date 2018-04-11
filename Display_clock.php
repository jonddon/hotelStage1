<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-type" content="text/html" charset="utf-8">
		<title>Display Digital Clock</title>
	</head>
	<style type="text/css">
		.container{
			background-image: url(autumn.jpg);
			display: table;
			vertical-align: middle;
			text-align: center;
			margin: auto;
			width: 100%;
			height: 100vh;
			position: fixed;
			top:0px;
			left:0px;
			line-height: px;
		}
		.row{
			display: table-cell;
			vertical-align: middle;
			color: white;
			font-size: 48px;

			font-family: serif;
			font-style: italic;
			font-weight: 900;
			line-height: normal;
			text-align: center;

			color: #FFFFFF;
			text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
			}
	</style>
	<body>
		<div class="container">
			<div class="row">
				<p> Hello Nerd, Welcome to HNG Internship <br/><br/>
					<?php
					date_default_timezone_set('Africa/Lagos');
					$current_time = date('h:i:s');
					echo $current_time;
				?>
				</p>
			</div>
			
		</div>
		
			
	</body>
</html>